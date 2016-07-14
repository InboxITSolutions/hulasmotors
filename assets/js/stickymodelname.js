$(document).ready(function() {
	var navOffset = jQuery(".model-name").offset().top;
		jQuery(window).scroll(function(){
         var scrollPos= jQuery(window).scrollTop();
            /*alert(scrollPos);*/
		if(scrollPos>navOffset){
             jQuery(".model-name").addClass("fixed");
         }
         else{
             jQuery(".model-name").removeClass("fixed");
         }
     });
    });