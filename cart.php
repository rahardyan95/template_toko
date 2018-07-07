<?php
include 'common/header.php';

?>
<!--/single_page-->
       <!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Cart <span>Item </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i>|</i></li>
								<li>Quick View</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	 			<div class="clearfix"> </div>
				<!-- /new_arrivals --> 
	<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>List Item</li>
							<!-- <li>Ulasan</li> -->
							<!-- <li>Informasi</li> -->
						</ul>
					
				</div>	
				<div class="clearfix"></div>
				<p>&nbsp;</p>
				<div class="clearfix"></div>
					<div class="container">
					<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody id="listItem">
						
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-right"><strong>Total 1.99</strong></td>
						</tr>
						<tr>
							<td><a href="processor.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-right"><strong id="total">Total $1.99</strong></td>
							<td><a href="checkout.php" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>

			</div>
	<!-- //new_arrivals --> 
	  	<!--/slider_owl-->
	
 </div>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<div class="clearfix"></div>
<!--//single_page-->
<!--/grids-->
<!--grids-->
<?php
	include 'common/footer.php';
?>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
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
	<!-- single -->
<script src="js/imagezoom.js"></script>
<!-- single -->
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
<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
<!-- //script for responsive tabs -->		
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
								



var items = paypal.minicart.cart.items();
				var total = 0;
				$.each( items, function( key, value ) {
				    console.log(value._data);
				  // alert( key + ": " + value );
				  var name = value._data.item_name;
				  var amount = value._data.amount;
				  var qty = value._data.quantity;
				  var Subtotal = amount * qty;
				  var html = '<tr>'+
							'<td data-th="Product">'+
								'<div class="row">'+
									'<div class="col-sm-12">'+
										name+
									'</div>'+
								'</div>'+
							'</td>'+
							'<td data-th="Price" class="text-right">'+amount.formatMoney(0, ',', '.')+'</td>'+
							'<td data-th="Quantity">'+
								'<input type="number" class="form-control text-center" value="'+qty+'">'+
							'</td>'+
							'<td data-th="Subtotal" class="text-right">'+Subtotal.formatMoney(0, ',', '.')+'</td>'+
							'<td class="actions" data-th="">'+
								'<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>'+
								'<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>'+								
							'</td>'+
						'</tr>'
				  $('#listItem').append(html);

				  total = total + Subtotal;
				});

				$('#total').html('Total Rp '+total.formatMoney(0, ',', '.'));
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
