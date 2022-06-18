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

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
<header>
	<!-- TOP HEADER -->
	<div id="top-header">
		<div class="container">
			<ul class="header-links pull-right">
				<li>
					<?php
					if (isset($_SESSION["account"])) { ?>
						<a href="#"><i class="fa fa-user-o"></i>Hello <?php echo $_SESSION["account"]; ?>!</a>
					<?php } else { ?>
						<a href="accout.php"><i class="fa fa-user-o"></i>Account</a>
					<?php } ?>
				</li>
				<?php if (isset($_SESSION["account"])) { ?>
					<li><a href="signout.php"><i class="fa fa-user-o"></i>Sign out</a></li>
				<?php } else { ?>
					<li><a href="register.php"><i class="fa fa-user-o"></i>Register</a></li>
				<?php }
				?>
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
						<a href="index.php" class="logo">
							<img src="./img/logo.png" alt="">
						</a>
					</div>
				</div>
				<!-- /LOGO -->

				<!-- SEARCH BAR -->
				<div class="col-md-6">
					<div class="header-search">
						<form method="get" action="result.php">
							<select class="input-select">
								<option value="0">All Categories</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
							</select>
							<input class="input" placeholder="Search here" name="keyword">
							<button type="submit" class="search-btn">Search</button>
						</form>
					</div>
				</div>
				<!-- /SEARCH BAR -->

				<!-- ACCOUNT -->
				<div class="col-md-3 clearfix">
					<div class="header-ctn">
						<!-- Wishlist -->
						<div>
							<a href="yourwishlist.php?keyword=1">
								<i class="fa fa-heart-o"></i>
								<span>Your Wishlist</span>
								<?php
								$search = $product->wishlist("1");
								if (count($search) != 0) { ?>
									<div class="qty"><?php echo count($search); ?>
									</div>
								<?php } ?>
							</a>
						</div>
						<!-- /Wishlist -->

						<!-- Cart -->
						<div class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<i class="fa fa-shopping-cart"></i>
								<span>Your Cart</span>
								<?php $count = 0;
								foreach ($getAllProducts as $value) {
									if (isset($_SESSION["quanlity." . $value['id']])) {
										$count++;
									}
								} ?>
								<?php if ($count != 0) { ?>
									<div class="qty"><?php echo $count ?></div>
								<?php
								}
								?>
							</a>
							<div class="cart-dropdown">
								<div class="cart-list">
									<?php
									foreach ($getAllProducts as $value) {
										if (isset($_SESSION["quanlity." . $value['id']])) {
											if ($_SESSION["quanlity." . $value['id']] != 0) { ?>
												<div class="product-widget">
													<div class="product-img">
														<a href="product.php?id=<?php echo $value['id'] ?>&manu_id=<?php echo $value['manu_id'] ?>">
															<img src="./img/<?php echo $value['image'] ?>" alt="">
														</a>
													</div>
													<div class="product-body">
														<h3 class="product-name"><?php echo $value['name'] ?></h3>
														<h4 class="product-price"><span class="qty"><?php echo $_SESSION["quanlity." . $value['id']] . "x" ?></span><?php echo number_format($value['price'] - $value['price'] * $value['sale'] / 100) ?></h4>
													</div>
													<a href='del.php?id=<?php echo $value['id'] ?>&web=index&manu_id=<?php echo $value['manu_id'] ?>'><button class="delete"><i class="fa fa-close"></i></button></a>
												</div>
									<?php
											}
										}
									}
									?>
								</div>
								<div class="cart-summary">
									<small><?php $count = 0;
											foreach ($getAllProducts as $value) {
												if (isset($_SESSION["quanlity." . $value['id']])) {
													$count++;
												}
											}
											if ($count != 0) {
												echo $count;
											} else {
												echo "0";
											} ?> Item(s) selected</small>
									<h5>SUBTOTAL: <?php if (count($_SESSION) == 0) {
														echo 0;
													} else {
														$sum = 0;
														foreach ($getAllProducts as $value) {
															if (isset($_SESSION["quanlity." . $value['id']])) {
																if ($_SESSION["quanlity." . $value['id']] != 0) {
																	$sum += ($value['price'] - $value['price'] * $value['sale'] / 100) * $_SESSION["quanlity." . $value['id']];
																}
															}
														}
														echo number_format($sum) . "VND";
													} ?></h5>
								</div>
								<div class="cart-btns">
									<a href="cart.php">View Cart</a>
									<a href="checkout.php">Checkout <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
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

<!-- NAVIGATION -->
<nav id="navigation">
	<!-- container -->
	<div class="container">
		<!-- responsive-nav -->
		<div id="responsive-nav">
			<!-- NAV -->
			<ul class="main-nav nav navbar-nav">
				<li class="active"><a href="index.php">Home</a></li>
				<?php
				foreach ($getAllManu as $value) { ?>
					<li><a href="productseach.php?manuid=<?php echo $value['manu_id'] ?>"><?php echo $value['manu_name'] ?></a></li>
				<?php
				}
				?>
			</ul>
			<!-- /NAV -->
		</div>
		<!-- /responsive-nav -->
	</div>
	<!-- /container -->
</nav>
<!-- /NAVIGATION -->

	<main role="main">
		<!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
		<div class="container mt-4">
			<h1 class="text-center">CART</h1>
			<div class="row">
				<div class="col col-md-12">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th style="text-align: center;">STT</th>
								<th>Image</th>
								<th>Product Name</th>
								<th style="text-align: center;">Quantity</th>
								<th>Price</th>
								<th>Into Money</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($getAllProducts as $value) {
								if (isset($_SESSION["quanlity." . $value['id']])) {
									if ($_SESSION["quanlity." . $value['id']] != 0) { ?>
										<tr>
											<td>
												<div style="text-align: center;">
													<?php echo $stt;
													$stt++ ?>
												</div>
											</td>
											<td>
												<div class="product-widget">
													<div class="product-img">
														<a href="product.php?id=<?php echo $value['id'] ?>&manu_id=<?php echo $value['manu_id'] ?>">
															<img src="./img/<?php echo $value['image'] ?>" alt="">
														</a>
													</div>
												</div>
											</td>
											<td><?php echo $value['name'] ?></td>
											<td>
												<form action="cartplusminus.php?id=<?php echo $value['id'] ?>" method="post">
													<div style="text-align: center;">
														<?php echo $_SESSION["quanlity." . $value['id']] ?><br>
														<a class="btn btn-danger " href="cartplusminus.php?cart=1&id=<?php echo $value['id'] ?>" class="plus">+</a>
														<a class="btn btn-danger " href="cartplusminus.php?cart=0&id=<?php echo $value['id'] ?>" class="plus">-</a>
													</div>
												</form>
											</td>
											<td><?php echo number_format($value['price'] - $value['price'] * $value['sale'] / 100) . "VND" ?></td>
											<td><?php echo number_format(($value['price'] - $value['price'] * $value['sale'] / 100) * $_SESSION["quanlity." . $value['id']]) . "VND" ?></td>
											<td>
												<a href='del.php?id=<?php echo $value['id'] ?>&web=cart&manu_id=<?php echo $value['manu_id'] ?>' data-sp-ma="2" class="btn btn-danger ">
													<i class="fa fa-trash" aria-hidden="true"></i> Xóa
												</a>
											</td>
										</tr>
							<?php
									}
								}
							}
							?>
						</tbody>
					</table>

					<a href="index.php" class="btn btn-warning btn-md"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back</a>
					<a href="checkout.php" class="btn btn-primary btn-md"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Payment</a>
				</div>
			</div>
		</div>
		<!-- End block content -->
	</main>


	<?php include "footer.php" ?>

</body>

</html>