<?php
	include 'common/header.php';

?>
	
<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li> 
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Processor <span>Collection</span></h3>
						<p>Special untuk hari ini Intel Gen8</p>
						<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Motherboard <span>Collection</span></h3>
						<p>New Arrivals On Sale ROG MAXIMUS VII</p>
						<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item3"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>RAM <span>Collection</span></h3>
						<p>CORSAIR DOMINATOR EXTREME</p>
						<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>VGA <span>Collection</span></h3>
						<p>Hadir GTX1080 ROG STRIX</p>
						<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item5"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Case <span>Thermaltake</span></h3>
						<p>Thermaltake Level 20 Available!!</p>
						<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
					</div>
				</div>
			</div> 
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
    </div> 
	<!-- //banner -->
<?php

	include 'home.php';

	include 'common/footer.php';

?>

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
