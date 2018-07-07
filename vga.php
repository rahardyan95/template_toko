<?php
	include 'common/header.php';
?>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Processor</h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i>|</i></li>
								<li>Processor</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
         <!-- mens -->
		<div class="col-md-4 products-left">
			<div class="filter-price">
				<h3>Filter By <span>Harga</span></h3>
					<ul class="dropdown-menu6">
						<li>                
							<div id="slider-range"></div>							
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>			
					</ul>
			</div>
			<div class="css-treeview">
				<h4>Kategori</h4>
				<ul class="tree-list-pad">
					<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Processor</label>
						<ul>
							<li><input type="checkbox" id="item-0-0" /><label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Intel</label>
								<ul>
									<li><a href="mens.html">Core i7 8700</a></li>
									<li><a href="mens.html">Core i7 7700K</a></li>
									<li><a href="mens.html">Core i7 6700</a></li>
								</ul>
							</li>
							<li><input type="checkbox"  id="item-0-1" /><label for="item-0-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> AMD</label>
								<ul>
									<li><a href="mens.html">AMD Ryzen 1800X</a></li>
								</ul>
						</ul>
					</li>
					<li><input type="checkbox" id="item-1" checked="checked" /><label for="item-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> VGA</label>
						<ul>
							<li><input type="checkbox" checked="checked" id="item-1-0" /><label for="item-1-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Nvidia</label>
								<ul>
									<li><a href="mens.html">VGA Galax GTX1080 HOF</a></li>
									<li><a href="mens.html">VGA Asus GTX1080 Strix</a></li>
									<li><a href="mens.html">VGA MSI GTX1080Ti GamingX</a></li>
									<li><a href="mens.html">VGA Inno3D GTX1080 Gaming OC</a></li>
								</ul>
							</li>
							
						</ul>
					</li>
					<li><input type="checkbox" checked="checked" id="item-2" /><label for="item-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> RAM</label>
						<ul>
							<li><input type="checkbox"  id="item-2-0" /><label for="item-2-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> RAM PC</label>
								<ul>
									<li><a href="mens.html">Corsair Dominator Platinum 32GB (2x16GB) DDR4</a></li>
									<li><a href="mens.html">GSkill Trident Z RGB 2x8 PC25600 3200Mhz Dual Kit</a></li>
									<li><a href="mens.html">Kingston Hyper X Fury RAM DDR4 8GB (2x4GB) PC 19200</a></li>
									<li><a href="mens.html">RAM GSKILL Ripjaws V Series GVK DDR4 32GB PC3200</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><input type="checkbox" checked="checked" id="item-3" /><label for="item-3"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Casing</label>
						<ul>
							<li><input type="checkbox" id="item-3-0" /><label for="item-3-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Thermaltake</label>
								<ul>
									<li><a href="mens.html">Thermaltake View 32 Tempered Glass RGB Edition Mid-Tower Chassis</a></li>
									<li><a href="mens.html">Thermaltake Level 20 Tempered Glass Edition Full Tower Chassis</a></li>
									<li><a href="mens.html">Thermaltake Core P5 Tempered Glass Ti Edition ATX Wall-Mount Chassis</a></li>
									<li><a href="mens.html">Thermaltake View 71 Tempered Glass Snow Edition Full Tower Chassis</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="community-poll">
				<h4>Pilihan Teratas</h4>
				<div class="swit form">	
					<form>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>Pengiriman</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Harga Termurah</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Claim Garansi</label> </div></div>		
					<input type="submit" value="KIRIM">
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products-right">
			<h5>Semua <span>Produk</span></h5>
			<div class="sort-grid">
				<div class="sorting">
					<h6>Sort By</h6>
					<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">Default</option>
						<option value="null">Nama(A - Z)</option> 
						<option value="null">Nama(Z - A)</option>
						<option value="null">Harga(Tertinggi - Terendah)</option>
						<option value="null">Harga(Terendah - Tertinggi)</option>
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="sorting">
					<h6>Showing</h6>
					<select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">7</option>
						<option value="null">14</option> 
						<option value="null">28</option>					
						<option value="null">35</option>								
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-top">
				
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<img class="img-responsive" src="images/banner2.jpg" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="images/banner5.jpg" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="images/banner3.jpg" alt=" "/>
						</li>

					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-bottom">
				<div class="col-sm-4 men-wear-left">
					<img class="img-responsive" src="images/bb2.jpg" alt=" " />
				</div>
				<div class="col-sm-8 men-wear-right">
					<h4>Processor Exclusive <span>Intel</span></h4>
					<p>Processor dari intel generasi 8 kemungkinan bisa melakukan banyak multitasking, karena mempunyai banyak core yang biasa digunakan melakukan render serta edit baik foto maupun video. Processor ini wajib dimiliki bagi kalian yang melakukan aktivitas di bidang multimedia.</p>
				</div>
				<div class="clearfix"></div>
			</div>
				<div class="col-md-4 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/m8.jpg" alt="" class="pro-image-front">
										<img src="images/m8.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">VGA</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">VGA Galax GTX1080 HOF</a></h4>
										<div class="info-product-price">
											<span class="item_price">Rp 9.430.000</span>
											<del>Rp 9.650.000</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Party Men's Blazer">
																	<input type="hidden" name="amount" value="30.99">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="submit" name="submit" value="Add to cart" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
			<div class="col-md-4 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/m7.jpg" alt="" class="pro-image-front">
										<img src="images/m7.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">Casing</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">Thermaltake Level 20 Tempered Glass Edition Full Tower Chassis</a></h4>
										<div class="info-product-price">
											<span class="item_price">Rp 1.400.000</span>
											<del>Rp 1.560.000</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Analog Watch">
																	<input type="hidden" name="amount" value="30.99">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="submit" name="submit" value="Add to cart" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
			<div class="col-md-4 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/s1.jpg" alt="" class="pro-image-front">
										<img src="images/s1.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">RAM</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">GSkill Trident Z RGB 2x8 PC25600 3200Mhz Dual Kit</a></h4>
										<div class="info-product-price">
											<span class="item_price">Rp 2.800.000</span>
											<del>Rp 3.500.000</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Running Shoes">
																	<input type="hidden" name="amount" value="30.99">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="submit" name="submit" value="Add to cart" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
				
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
		<div class="single-pro">
			<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/m1.jpg" alt="" class="pro-image-front">
										<img src="images/m1.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">Core i7 8700</a></h4>
										<div class="info-product-price">
											<span class="item_price">Rp 4.680.000</span>
											<del>Rp 4.880.000</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Formal Blue Shirt" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/m2.jpg" alt="" class="pro-image-front">
										<img src="images/m2.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">Core i7 7700K</a></h4>
										<div class="info-product-price">
											<span class="item_price">Rp 4.250.000</span>
											<del>Rp 4.680.000</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Sweatshirt" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
                            <div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/m3.jpg" alt="" class="pro-image-front">
										<img src="images/m3.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">Core i7 6700</a></h4>
										<div class="info-product-price">
											<span class="item_price">Rp 4.160.000</span>
											<del>Rp 4.460.000</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Dark Blue Track Pants" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="images/m4.jpg" alt="" class="pro-image-front">
										<img src="images/m4.jpg" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">AMD Ryzen 1800X</a></h4>
										<div class="info-product-price">
											<span class="item_price">Rp 4.565.000</span>
											<del>Rp 4.965.000</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Black T-Shirt" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
		</div>
	</div>
</div>	
<!-- //mens -->
<!--/grids-->
<div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Pengiriman Gratis</h3>
						<p>Dapatkan pengiriman gratis untuk wilayah JABODETABEK.</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Live Chat Support 24 Jam</h3>
						<p>Gunakan fitur live chat untuk menanyakan seputar ketrsediaan stok barang.</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Garansi Uang Kembali</h3>
						<p>Dapatkan garansi uang kembali jika untuk barang yang cacat, untuk waktu 1x24jam.</p>
					</div>
				</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Claim Garansi</h3>
						<p>Claim garansi sangat mudah untuk dilakukan jika mnenggunakan struk pembelian.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>
<!--grids-->

<?php
	include 'common/footer.php';
?>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
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
	<!---->
							<script type='text/javascript'>//<![CDATA[ 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 10000,
										max: 20000000,
										values: [ 2000000, 10000000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "Rp" + ui.values[ 0 ].formatMoney(0, ',', '.') + " - Rp" + ui.values[ 1 ].formatMoney(0, ',', '.') );
										}
							 });
							$( "#amount" ).val( "Rp" + $( "#slider-range" ).slider( "values", 0 ).formatMoney(0, ',', '.') + " - Rp" + $( "#slider-range" ).slider( "values", 1 ).formatMoney(0, ',', '.') );

							});//]]>  

							</script>
						<script type="text/javascript" src="js/jquery-ui.js"></script>
					 <!---->
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
</body>
</html>
