<?php
 if(!isset($_SESSION)) 
  { 
    session_start(); 
  }
  //dd($_SESSION['checklogin']);
 if(!isset($_SESSION['checklogin']) || $_SESSION['checklogin'] == 0 ){?>
  <script>window.location.href = "http://127.0.0.1:8000/login";</script>
<?php }?>
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
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
                </ul>
                <ul class="header-links pull-right">
                    <li><a href="/login"><i class="fa fa-user-o"></i>Logout</a></li>
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
                        <div class="header-search position-relative">
                            <form action="{{ url('search')}}" method="GET" >
                                <select class="input-select">
                                    <option value="0">All Categories</option>
                                    <option value="1">Category 01</option>
                                    <option value="1">Category 02</option>
                                </select>
                                <input oninput="Search(this.value)"; class="input" placehrolder="Search here" id="key" name="key">
                                <button class="search-btn" value="Search">Search</button>
                                <ul id="search">
                            </form>
                            <div class="position-absolute bg-light" style="left: 18% ; z-index: 2">
                                <div>
                                    <ul id="resultSearch">
                                </div>
                              
                            </div>
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

                            <!-- Cart -->
                            {{-- <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>
                                    <div class="qty">3</div>
                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list">
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="./img/product01.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                                            </div>
                                            <button class="delete"><i class="fa fa-close"></i></button>
                                        </div>

                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="./img/product02.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                                            </div>
                                            <button class="delete"><i class="fa fa-close"></i></button>
                                        </div>
                                    </div>
                                    <div class="cart-summary">
                                        <small>3 Item(s) selected</small>
                                        <h5>SUBTOTAL: $2940.00</h5>
                                    </div>
                                    <div class="cart-btns">
                                        <a href="#">View Cart</a>
                                        <a href="{{ url('checkout')}}">Checkout <i
                                                class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- /Cart -->

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

   

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- shop -->
                <div class="col-md-3 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/huawei-nova-7i.jpeg" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>HUEWEI<br>Collection</h3>
                            <a href="{{ url('store')}}" class="cta-btn">Shop now <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-3 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/oppo-a5-2020-128gb.jpeg" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>OPPO<br>Collection</h3>
                            <a href="{{ url('store')}}" class="cta-btn">Shop now <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-3 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/samsung-galaxy-a50s-a507-64gb.jpeg" alt="">
                        </div>
                        <div class="shop-body" style="z-index: 1">
                            <h3>SAMSUNG<br>Collection</h3>
                            <a href="{{ url('store')}}" class="cta-btn">Shop now <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
                <!-- shop -->
                <div class="col-md-3 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/xiaomi-redmi-note-2-16gb.jpeg" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>XIAOMI;<br>Collection</h3>
                            <a href="{{ url('store')}}" class="cta-btn">Shop now <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
      
       <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">                   
                        <li class="dropdown"><a class="dropbtn" href="{{ url('index')}}" style="text-decoration: none">Home</a></li>
                        <li class="dropdown"><a href="#"style="text-decoration: none">Product</a>
                            <div class="dropdown-content">
                                <a href=" {{ url('index')}}">Oppo</a>
                                <a href="#">Xiaomi</a>
                                <a href="#">Apple</a>
                                <a href="#">Samsung</a>
                                <a href="#">Huewei</a>
                              </div>
                        </li>
                        <li class="dropdown"><a href="#"style="text-decoration: none">National</a>
                            <div class="dropdown-content">
                                <a href="#">Việt Nam</a>
                                <a href="#">China</a>
                                <a href="#">American</a>
                                <a href="#">Korea</a>
                                <a href="#">Taiwan</a>
                              </div>
                        </li>
                    </ul>       
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    


  

   

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                	<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">
								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<span></span>
										Samsung Galaxy
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-2">
									<label for="category-2">
										<span></span>
										Iphone
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-3">
									<label for="category-3">
										<span></span>
										Xiaomi
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-4">
									<label for="category-4">
										<span></span>
										Oppo
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-5">
									<label for="category-5">
										<span></span>
										Huewei
									</label>
								</div>

							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						
					</div>
					<!-- /ASIDE -->
                <!-- Products tab & slick -->
                <div class="col-md-9">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab2" class="tab-pane fade in active">
                                    <div class="row">
                                        @foreach($phantrang as $row)
                                        <div class="col-md-4">	
                                            <!-- product -->
                                            <div class="product" style="margin-bottom: 80px" >
                                                <div class="product-img">
                                                    <a href="product/{{$row->id}}" style="text-decoration: none;">
                                                        <img src="./img/{{$row->image}}" alt="" class="img-fluid" style="width: auto;">
                                                    </a>
                                                </div>
                                                <div class="product-body">
                                                    <p class="product-category">Category</p>
                                                    <h3 class="product-name"><a href="{{ url('product')}}">{{$row->name}}</a></h3>
                                                </div>
                                               <a href="addtocart/{{$row->id}}">
                                                    <div class="add-to-cart">
                                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>ADD TO CART</button>
                                                    </div>
                                               </a>
                                            </div>
                                            <!-- /product -->
                                        </div>
                                        @endforeach     
                                        <div style="margin-left: 80% ; padding-top: 50px"> {{$phantrang->links()}}  </div>
                                                                                                           
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- /Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
   <div class="row"> <img src="img/logodienthoai.jpg" alt="" style=" margin-top: 100px "/></div>
    


<!-- NEWSLETTER -->
<div id="newsletter" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row" style="margin-top:100px ">
            <div class="col-md-12">
                <div class="newsletter">
                    <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                    <form>
                        <input class="input" type="email" placeholder="Enter Your Email">
                        <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                    </form>
                    <ul class="newsletter-follow">
                        <li>
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
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
                        <h3 class="footer-title">Information</h3>
                        <ul class="footer-links">
                            <li><a style="color: white" href="#">About Us</a></li>
                            <li><a style="color: white" href="#">Contact Us</a></li>
                            <li><a style="color: white" href="#">Privacy Policy</a></li>
                            <li><a style="color: white" href="#">Orders and Returns</a></li>
                            <li><a style="color: white" href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">About Us</h3>
                        <p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                        <ul class="footer-links">
                            <li><a style="color: white" href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
                            <li><a style="color: white" href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
                            <li><a style="color: white" href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
                        </ul>
                    </div>
                </div>

              

                <div class="clearfix visible-xs"></div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Information</h3>
                        <ul class="footer-links">
                            <li><a style="color: white" href="#">About Us</a></li>
                            <li><a style="color: white" href="#">Contact Us</a></li>
                            <li><a style="color: white" href="#">Privacy Policy</a></li>
                            <li><a style="color: white" href="#">Orders and Returns</a></li>
                            <li><a style="color: white" href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Service</h3>
                        <ul class="footer-links">
                            <li><a style="color: white" href="#">My Account</a></li>
                            <li><a style="color: white"href="#">View Cart</a></li>
                            <li><a style="color: white" href="#">Wishlist</a></li>
                            <li><a style="color: white" href="#">Track My Order</a></li>
                            <li><a style="color: white" href="#">Help</a></li>
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
                   
                    <span style="color: white" class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/nouislider.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/ajax.js')}}"></script>
</body>
</html>