<footer>
    <section class="last-footer">
	    <div class="container-fluid" id="mark">
	        <div class="row">
	            <div class="col-md-6">
	                <p>Copyright &copy; 2016 Hulas Motor, All rights reserved</p>
	            </div>
	            <div class="col-md-6">
	                <p><span class="design pull-right" >design: <a href="http://theinboxit.com" target="_blank">InBox</a></span></p>
	            </div>

	        </div>
	    </div>
	</section>
</footer>
<!-- Scripts -->
<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/jquery-1.9.1.min.js"></script>
<!-- <script src="assets/js/jquery-1.12.2.min.js"></script> -->
<script src="assets/bstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="assets/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="assets/js/stickynav.js"></script>
<!-- Nav toggle Script -->
<script type="text/javascript">
  $(document).ready(function () {
        $(".navbar-toggle").on("click", function () {
            $(this).toggleClass("active");
        });
    });
</script>
<script type="text/javascript">
$('#myCarousel').carousel({
  interval: 3000,
  cycle: true
});
</script>
<script>
    $(document).ready(function(){
        $('a[href*=#]').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
                    && location.hostname == this.hostname) {
                var $target = $(this.hash);
                $target = $target.length && $target
                        || $('[name=' + this.hash.slice(1) +']');
                if ($target.length) {
                    var targetOffset = $target.offset().top;
                    $('html,body')
                            .animate({scrollTop: targetOffset}, 600);
                    return false;
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('.tabs li a').click(function(e) {
            e.preventDefault();
            $('.tabs li a').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>

