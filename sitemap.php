<?php

/*************************************************************

 Simple site crawler to create a search engine XML Sitemap.
 Version 2.0-test1
 Free to use, without any warranty.
 Written by Elmar Hanlhofer https://www.plop.at 01/Feb/2012.

 ChangeLog:
 ----------
 Version 2.0-test1 2016/05/28 by Elmar Hanlhofer
 
     * Most program parts rewritten

 Version 1.0 2015/10/14 by Elmar Hanlhofer
 
     * CLI / Website mode added
     * Multiple extension support added
     * Support for quoted URLs with spaces added
     * Skip mailto links
     * Converting special chars in the URLs for the XML file
     * Added user agent
     * Minor code updates

 Version 0.2 2013/01/16  

     * curl support - by Emanuel Ulses
     * write url, then scan url - by Elmar Hanlhofer

 Version 0.1 2012/02/01 by Elmar Hanlhofer

     * Initital release

*************************************************************/

    // Set the output file name.
    define (OUTPUT_FILE, "sitemap.xml");
    
    // Set the start URL. Here is https used, use http:// for non SSL websites.
    define (SITE, "https://www.theinboxit.com");

    // Set true or false to define how the script is used.
    // true:  As CLI script.
    // false: As Website script.
    define (CLI, true);

    // Define here the URLs to skip. All URLs that start with the defined URL 
    // will be skipped too.
    // Example: "https://www.plop.at/print" will also skip
    //   https://www.plop.at/print/bootmanager.html
    $skip_url = array (
                       "https://www.plop.at/print",
                       "https://www.plop.at/slide",
                      );
    
    // Scan frequency
    define (FREQUENCY, "weekly");
    
    // Page priority
    define (PRIORITY, "0.5");

/***********************************************/    
/* Init end                                    */
/***********************************************/    


function GetURL ($url)
{

    $ch = curl_init ($url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_USERAGENT, AGENT);

    $data = curl_exec($ch);

    curl_close($ch);

    return $data;
}

function GetQuotedUrl ($str)
{
    if ($str[0] != '"') return $str; // Only process a string 
                                     // starting with double quote
    $ret = "";
    
    $len = strlen ($str);    
    for ($i = 1; $i < $len; $i++) // Start with 1 to skip first quote
    {
        if ($str[$i] == '"') break; // End quote reached
        $ret .= $str[$i];
    }
    
    return $ret;
}


function GetHREFValue ($anchor)
{

    $split1  = explode ("href=", $anchor);
    $split2 = explode (">", $split1[1]);
    $href_string = $split2[0];


    if ($href_string[0] == '"')
    {
        $url = GetQuotedUrl ($href_string);
    }
    else
    {
        $spaces_split = explode (" ", $href_string);
        $url          = $spaces_split[0];
    }
    return $url;
}

function GetEffectiveURL ($url)
{
    // Create a curl handle
    $ch = curl_init ($url);

    // Send HTTP request and follow redirections
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_USERAGENT, AGENT);
    curl_exec($ch);

    // Get the last effective URL
    $effective_url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
    // ie. "http://example.com/show_location.php?loc=M%C3%BCnchen"

    // Decode the URL, uncoment it an use the variable if needed
    // $effective_url_decoded = curl_unescape($ch, $effective_url);
    // "http://example.com/show_location.php?loc=München"

    // Close the handle
    curl_close($ch);

    return $effective_url;
}


function ValidateURL ($url_base, $url)
{
    global $scanned;
        
    $parsed_url = parse_url ($url);
        
    $scheme = $parsed_url["scheme"];
        
    // Skip URL if different scheme or not relative URL (skips also mailto)
    if (($scheme != SITE_SCHEME) && ($scheme != "")) return false;
        
    $host = $parsed_url["host"];
                
    // Skip URL if different host
    if (($host != SITE_HOST) && ($host != "")) return false;
    

    if ($host == "")    // Handle URLs without host value
    {
        if ($url[0] == '#') // Handle page anchor
        {
            echo "Skip page anchor: $url" . NL;
            return false;
        }
    
        if ($url[0] == '/') // Handle absolute URL
        {
            $url = SITE_SCHEME . "://" . SITE_HOST . $url;
        }
        else // Handle relative URL
        {
        
            $path = parse_url ($url_base, PHP_URL_PATH);
            
            if (substr ($path, -1) == '/') // URL is a directory
            {
                // Construct full URL
                $url = SITE_SCHEME . "://" . SITE_HOST . $path . $url;
            }
            else // URL is a file
            {
                $dirname = dirname ($path);

                // Add slashes if needed
                if ($dirname[0] != '/')
                {
                    $dirname = "/$dirname";
                }
    
                if (substr ($dirname, -1) != '/')
                {
                    $dirname = "$dirname/";
                }

                // Construct full URL
                $url = SITE_SCHEME . "://" . SITE_HOST . $dirname . $url;
            }
        }
    }

    // Get effective URL, follow redirected URL
    $url = GetEffectiveURL ($url); 

    // Don't scan when already scanned    
    if (in_array ($url, $scanned)) return false;
    
    return $url;
}

// Skip URLs from the $skip_url array
function SkipURL ($url)
{
    global $skip_url;

    if (isset ($skip_url))
    {
        foreach ($skip_url as $v)
        {           
            if (substr ($url, 0, strlen ($v)) == $v) return true; // Skip this URL
        }
    }

    return false;            
}


function Scan ($url)
{
    global $scanned, $pf;

    array_push ($scanned, $url);
    
    if (SkipURL ($url))
    {
        echo "Skip $url" . NL;
        return false;
    }
    
    // Remove unneeded slashes
    if (substr ($url, -2) == "//") 
    {
        $url = substr ($url, 0, -2);
    }
    if (substr ($url, -1) == "/") 
    {
        $url = substr ($url, 0, -1);
    }


    echo "Scan $url" . NL;

    $headers = get_headers ($url, 1);

    // Handle pages not found
    if (strpos ($headers[0], "404") !== false)
    {
        echo "Not found: $url". NL;
        return false;
    }

    // Handle redirected pages
    if (strpos ($headers[0], "301") !== false)
    {
        $url = $headers["Location"];
        echo "Redirected to: $url". NL;
        array_push ($scanned, $url);
    }

    // Get content type
    if (is_array ($headers["Content-Type"]))
    {
        $content = explode (";", $headers["Content-Type"][0]);
    }
    else
    {
        $content = explode (";", $headers["Content-Type"]);
    }
    
    // Check content type for website
    if ($content[0] != "text/html")
    {
        echo "Info: $url is not a website: $content[0]" . NL;
        return false;
    }

    
    $html = GetURL ($url);
    $html = trim ($html);
    if ($html == "") return true;  // Return on empty page
    
    $html = str_replace ("\r", " ", $html);        // Remove newlines
    $html = str_replace ("\n", " ", $html);        // Remove newlines
    $html = str_replace ("<A ", "<a ", $html);     // <A to lowercase
    $html = substr ($html, strpos ("<a ", $html)); // Start from first anchor

    $a1   = explode ("<a", $html);

    foreach ($a1 as $next_url)
    {
        $next_url = trim ($next_url);
        
        // Skip first array entry
        if ($next_url == "") continue; 
        
        // Get the attribute value from href
        $next_url = GetHREFValue ($next_url); 
        
        // Do all skip checks and construct full URL
        $next_url = ValidateURL ($url, $next_url);
        
        // Skip if url is not valid
        if ($next_url == false) continue;

        if (Scan ($next_url))
        {
            // Add url to sitemap
            fwrite ($pf, "  <url>\n" .
                         "    <loc>" . htmlentities ($next_url) ."</loc>\n" .
                         "    <changefreq>" . FREQUENCY . "</changefreq>\n" .
                         "    <priority>" . PRIORITY . "</priority>\n" .
                         "  </url>\n"); 
        }
    }

    return true;
}

    define (VERSION, "2.0-test1");                                            
    define (AGENT, "Mozilla/5.0 (compatible; Plop PHP XML Sitemap Generator/" . VERSION . ")");
    define (NL, CLI ? "\n" : "<br>");
    define (SITE_SCHEME, parse_url (SITE, PHP_URL_SCHEME));
    define (SITE_HOST  , parse_url (SITE, PHP_URL_HOST));
    

    $pf = fopen (OUTPUT_FILE, "w");
    if (!$pf)
    {
        echo "Cannot create " . OUTPUT_FILE . "!" . NL;
        return;
    }

    fwrite ($pf, "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" .
                 "<!-- Created with Plop PHP XML Sitemap Generator " . VERSION . " https://www.plop.at -->\n" .
                 "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"\n" .
                 "        xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"\n" .
                 "        xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9\n" .
                 "        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">\n" .
                 "  <url>\n" .
                 "    <loc>" . SITE . "/</loc>\n" .
                 "    <changefreq>" . FREQUENCY . "</changefreq>\n" .
                 "  </url>\n");

    $scanned = array();
    Scan (GetEffectiveURL (SITE));
    
    fwrite ($pf, "</urlset>\n");
    fclose ($pf);

    echo "Done." . NL;
    echo OUTPUT_FILE . " created." . NL;
?>