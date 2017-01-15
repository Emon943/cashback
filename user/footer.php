<div id="footer">
	<div class="wrap">
		<div class="left">
			<a href="faq.php" class="ignore-register-modal">FAQs</a>&nbsp;&nbsp;<a href="terms.php" class="ignore-register-modal">Terms and Conditions</a>&nbsp;&nbsp;<a href="privacy.php" class="ignore-register-modal">Privacy Policy</a>&nbsp;&nbsp;<a href="contact.php" class="ignore-register-modal">Contact Us</a>
		</div>

		<div class="right">
			<a class="ignore-register-modal" href=""><img src="images/footer_logo.png" title="Return to Title Page" alt="Cash Back Kaboom" /></a>
		</div>

		<div class="share_text">
		<span>  
		    <a href="javascript:window.open('http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=http://www.cashbackkaboom.com/30&amp;p[images][0]=http://www.cashbackkaboom.com/images/header/logo.png&amp;p[title]=Check this video out. You get cash back when you shop and make money too. It\'s Free!', '_blank', 'width=400,height=500');void(0);"><img src="img/facebook.png" class="share_text" alt="Share on Facebook" width="35" align="absmiddle"></a>
		    <a href="javascript:window.open('http://twitter.com/home?status=Check this video out. You get cash back when you shop and make money too. It\'s Free! http://www.cashbackkaboom.com/30', '_blank', 'width=400,height=500');void(0);" class="share_text"><img src="img/twitter.png" alt="Share on Twitter" width="35" align="absmiddle"></a>
		    <a href="https://plus.google.com/share?url=Earn Cashback http://www.cashbackkaboom.com/30" target="_blank" onclick="javascript:window.open(this.href,
		    '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="share_text"><img src="img/googleplus.png" width="35" alt="Share on Google+" align="absmiddle"></a>
		</span>
		</div>

		<div class="clear"></div>

		<!-- Do not remove this copyright notice! -->
			<div class="powered-by">&copy; 2017 Cash Back Kaboom <div>
		<!-- Do not remove this copyright notice! -->
	</div>
</div>

<!-- For Shop Page, if not logged in, display a modal to register -->
	<!-- classie.js by @desandro: https://github.com/desandro/classie -->
	<script src="js/classie.js" type="text/javascript"></script>
	<script src="js/modalEffects.js" type="text/javascript"></script>

	<script src="js/mediaelement-and-player.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="js/mediaelementplayer.css" />

	<script>
	$('video,audio').mediaelementplayer();
	</script>

<script src="js/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.autocomplete.js"></script>
<script type="text/javascript" src="js/jsCarousel.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/cashbackengine.js"></script>

<script type="text/javascript">
$(window).load(function() {
    $('#slider .innerslide').nivoSlider({
        effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 600, // Slide transition speed
        pauseTime: 9000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        controlNav: false, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        prevText: '', // Prev directionNav text
        nextText: '', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});


$("#shop_nav").mouseenter(function(){
	$('#shop_drop').show();
}).mouseleave(function() {
	$('#shop_drop').hide();
});

$("#shop_drop").mouseenter(function() {
	$(this).show();
}).mouseleave(function() {
	$(this).hide();
});

jQuery(document).ready(function($){
	// --- Add chrome class if using chrome
	var Chrome = false;
	if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1) {
		Chrome = true;
		$('body').addClass('chrome');
	}

	// --- Add active class to navigation element
    var url = window.location.pathname, 
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('#homepage_header_nav a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).addClass('active');
            }
        });

	$("body").on("click", ".hide_link", function(){
		$.get( "session/hide_more_cash.php");
		$("#need_more_cash").fadeOut();
	});
});

$('#column_left .box .top').on( "click", function() {
  $( "#column_left .box .middle" ).toggle( "fast", function() {});
  $(this).toggleClass('active');
  return false;
});

$(document).ready(function() {
	    $(".cashbackengine_tooltip").click(
	        function() { $(this).contents("span:last-child").css({ display: "block" }); return false; }
	    );
	    $(".cashbackengine_tooltip").mousemove(function(e) {
	        // var mousex = e.pageX + 10;
	        // var mousey = e.pageY + 10;
	        var mousex = 90;
	        var mousey = 0;
	        $(this).contents("span:last-child").css({  top: mousey, left: mousex });
	    });
});

$(function(){
	$('#logged_nav').slicknav();
});

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45554800-1', 'cashbackkaboom.com');
  ga('send', 'pageview');

</script>

</body>
</html>