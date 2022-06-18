

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		 <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/nouislider.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
		<link rel="stylesheet" href="{{asset('css/slick.css')}}">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>@import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);
			body,html {
			  height:100%;
			  margin:0;
			  font-family:lato;
			}
			
			h2 {
			  margin-bottom:0px;
			  margin-top:25px;
			  text-align:center;
			  font-weight:200;
			  font-size:19px;
			  font-size:1.2rem;
			  
			}
			.checkout {
			  height:100%;
			  -webkit-box-pack:center;
			  -webkit-justify-content:center;
				  -ms-flex-pack:center;
					  justify-content:center;
			  -webkit-box-align:center;
			  -webkit-align-items:center;
				  -ms-flex-align:center;
					  align-items:center;
			  display:-webkit-box;
			  display:-webkit-flex;
			  display:-ms-flexbox;
			  display:flex;
			  background:-webkit-linear-gradient(#075991;, #075991;);
			  background:linear-gradient(#075991;,#075991;);
			}
			.dropdown-select.visible {
			  display:block;
			}
			.dropdown {
			  position:relative;
			}
			ul {
			  margin:0;
			  padding:0;
			}
			ul li {
			  list-style:none;
			  padding-left:10px;
			  cursor:pointer;
			}
			ul li:hover {
			  background:rgba(255,255,255,0.1);
			}
			.dropdown-select {
			  position:absolute;
			  background:#77aaee;
			  text-align:left;
			  box-shadow:0px 3px 5px 0px rgba(0,0,0,0.1);
			  border-bottom-right-radius:5px;
			  border-bottom-left-radius:5px;
			  width:90%;
			  left:2px;
			  line-height:2em;
			  margin-top:2px;
			  box-sizing:border-box;
			}
			.thin {
			  font-weight:400;
			}
			.small {
			  font-size:12px;
			  font-size:.8rem;
			}
			.half-input-table {
			  border-collapse:collapse;
			  width:100%;
			}
			.half-input-table td:first-of-type {
			  border-right:10px solid #4488dd;
			  width:50%;
			}
			.window {
			  height:540px;
			  width:800px;
			  background:#fff;
			  display:-webkit-box;
			  display:-webkit-flex;
			  display:-ms-flexbox;
			  display:flex;
			  box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.2);
			  border-radius:30px;
			  z-index:10;
			}
			.order-info {
			  height:100%;
			  width:50%;
			  padding-left:25px;
			  padding-right:25px;
			  box-sizing:border-box;
			  display:-webkit-box;
			  display:-webkit-flex;
			  display:-ms-flexbox;
			  display:flex;
			  -webkit-box-pack:center;
			  -webkit-justify-content:center;
				  -ms-flex-pack:center;
					  justify-content:center;
			  position:relative;
			}
			.price {
			  bottom:0px;
			  position:absolute;
			  right:0px;
			  color:#4488dd;
			}
			.order-table td:first-of-type {
			  width:25%;
			}
			.order-table {
				position:relative;
			}
			.line {
			  height:1px;
			  width:100%;
			  margin-top:10px;
			  margin-bottom:10px;
			  background:#ddd;
			}
			.order-table td:last-of-type {
			  vertical-align:top;
			  padding-left:25px;
			}
			.order-info-content {
			  table-layout:fixed;
			
			}
			
			.full-width {
			  width:100%;
			}
			.pay-btn {
			  border:none;
			  background:#22b877;
			  line-height:2em;
			  border-radius:10px;
			  font-size:19px;
			  font-size:1.2rem;
			  color:#fff;
			  cursor:pointer;
			  position:absolute;
			  bottom:25px;
			  width:calc(100% - 50px);
			  -webkit-transition:all .2s ease;
					  transition:all .2s ease;
			}
			.pay-btn:hover {
			  background:#22a877;
				color:#eee;
			  -webkit-transition:all .2s ease;
					  transition:all .2s ease;
			}
			
			.total {
			  margin-top:25px;
			  font-size:20px;
			  font-size:1.3rem;
			  position:absolute;
			  bottom:30px;
			  right:27px;
			  left:35px;
			}
			.dense {
			  line-height:1.2em;
			  font-size:16px;
			  font-size:1rem;
			}
			.input-field {
			  background:rgba(255,255,255,0.1);
			  margin-bottom:10px;
			  margin-top:3px;
			  line-height:1.5em;
			  font-size:20px;
			  font-size:1.3rem;
			  border:none;
			  padding:5px 10px 5px 10px;
			  color:#fff;
			  box-sizing:border-box;
			  width:100%;
			  margin-left:auto;
			  margin-right:auto;
			}
			.credit-info {
			  background:#4488dd;
			  height:100%;
			  width:50%;
			  color:#eee;
			  -webkit-box-pack:center;
			  -webkit-justify-content:center;
				  -ms-flex-pack:center;
					  justify-content:center;
			  font-size:14px;
			  font-size:.9rem;
			  display:-webkit-box;
			  display:-webkit-flex;
			  display:-ms-flexbox;
			  display:flex;
			  box-sizing:border-box;
			  padding-left:25px;
			  padding-right:25px;
			  border-top-right-radius:30px;
			  border-bottom-right-radius:30px;
			  position:relative;
			}
			.dropdown-btn {
			  background:rgba(255,255,255,0.1);
			  width:100%;
			  border-radius:5px;
			  text-align:center;
			  line-height:1.5em;
			  cursor:pointer;
			  position:relative;
			  -webkit-transition:background .2s ease;
					  transition:background .2s ease;
			}
			.dropdown-btn:after {
			  content: '\25BE';
			  right:8px;
			  position:absolute;
			}
			.dropdown-btn:hover {
			  background:rgba(255,255,255,0.2);
			  -webkit-transition:background .2s ease;
					  transition:background .2s ease;
			}
			.dropdown-select {
			  display:none;
			}
			.credit-card-image {
			  display:block;
			  max-height:80px;
			  margin-left:auto;
			  margin-right:auto;
			  margin-top:35px;
			  margin-bottom:15px;
			}
			.credit-info-content {
			  margin-top:25px;
			  -webkit-flex-flow:column;
				  -ms-flex-flow:column;
					  flex-flow:column;
			  display:-webkit-box;
			  display:-webkit-flex;
			  display:-ms-flexbox;
			  display:flex;
			  width:100%;
			}
			@media (max-width: 600px) {
			  .window {
				width: 100%;
				height: 100%;
				display:block;
				border-radius:0px;
			  }
			  .order-info {
				width:100%;
				height:auto;
				padding-bottom:100px;
				border-radius:0px;
			  }
			  .credit-info {
				width:100%;
				height:auto;
				padding-bottom:100px;
				border-radius:0px;
			  }
			  .pay-btn {
				border-radius:0px;
			  }
			}</style>
    </head>
	<body>
		  <!-- HEADER -->
		  <header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container" >
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
					<ul class="header-links pull-right">
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->
	
			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->
	
						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="{{ url('search')}}" method="GET">
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here" name="key">
									<button class="search-btn" value="Search">Search</button>
									<ul id="search">
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->
	
						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="/like">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->
	
							
								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->


		 <!-- BREADCRUMB -->
		 <div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="/index">Home</a></li>
							<li><a href="#">MANUFACTURES</a></li>
							<li><a href="#">NATIONAL</a></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
		<div class='container checkout'>
			<div class='window'>
			  <div class='order-info'>
				<div class='order-info-content'>
				  <h2>Order Summary</h2>
						  <div class='line'></div>
				
				  <table class='order-table'>
					<tbody>
					  <tr>
						<td><img src='/img/{{$image}}' class='full-width'></img>
						</td>
						<td>
						  <br> <span class='thin'>{{$name}}</span>
						  <br>sale {{$sale}} %<br> <span class='thin small'>{{$description}}<br><br></span>
						</td>
					  </tr>
					  <tr>
						<td>
							<div class='quantity' value="0"></div>
						</td>
						<td>
						  <div class='price'>{{$price}}</div>
						</td>
					  </tr>
					</tbody>
				  </table>
				  <div class='line'></div>	

				  <div class='total'>
					<span style='float:left;'>
					  TOTAL
					</span>
					<span style='float:right; text-align:right;' class="sum">
					</span>
				  </div>
		  </div>
		  </div>
				  <div class='credit-info'>
					<div class='credit-info-content'>
					  <table class='half-input-table'>
						<tr><td>Please select your card: </td><td><div class='dropdown' id='card-dropdown'><div class='dropdown-btn' id='current-card'>Visa</div>
						  <div class='dropdown-select'>
						  <ul>
							<li>Master Card</li>
							<li>American Express</li>
							</ul></div>
						  </div>
						 </td></tr>
					  </table>
					  <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
					  Card Number
					  <input class='input-field'></input>
					  Card Holder
					  <input class='input-field'></input>
					  <table class='half-input-table'>
						<tr>
						  <td> Expires
							<input class='input-field'></input>
						  </td>
						  <td>CVC
							<input class='input-field'></input>
						  </td>
						</tr>
					  </table>
					  <button class='pay-btn'>Checkout</button>
		  
					</div>
		  
				  </div>
				</div>
			  </div>

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<!-- <script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script> -->

		<script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>		
		<script src="{{asset('js/jquery.zoom.min.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>
		<script src="{{asset('js/nouislider.min.js')}}"></script>
		<script src="{{asset('js/slick.min.js')}}"></script>

		
	</body>
	<script>
		var number = document.querySelector('.quantity');
		var price = document.querySelector('.price');
		var sum = document.querySelector('.sum');
		window.onload = function(){
			number.innerHTML = localStorage.getItem("storageName");
			sum.innerHTML = number.innerHTML * price.innerHTML + "  VNĐ";
		};
	</script>
</html>
