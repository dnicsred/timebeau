<?php 
	require_once 'timebeau(CMS)/modules/mod_connection.php';
	session_start();
$uuid = uniqid('cart');

if (isset($_SESSION['cart']))
	 {
  	$_SESSION['cart'] = $_SESSION['cart'];
  }else
  {
  	$_SESSION['cart'] = $uuid;
	# code...
}
  
  $sql="SELECT * FROM cart WHERE cartNo=?";
  $result = $conn->prepare($sql);
  $result->execute(array($_SESSION['cart']));
  $count = $result->rowCount();
$cart=10;

?>
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="https://www.facebook.com/Timebeau-by-Yang-1892582744094511/" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-google mail"></a>
				</div>


				<span class="topbar-child1">
					Free delivery minimun of 700
				</span>

				
				<div class="topbar-child2">
					<span class="topbar-email">
						timebeau@gmail.com
					</span>
				</div>
			</div>

			<div class="wrap_header" style="background-color:#FF4500">

				<!-- Logo -->
				<a href="index.php" class="logo">
					<img src="images/icons/LOGO3.png" width="200px" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
						
						<?php
							
							echo ($menu=="H")? 
							'<li><a href="index.php" style="color:black; letter-spacing:1px">Home</a></li>'
								:
							'<li><a href="index.php" style="color:white; letter-spacing:1px">Home</a></li>';

							echo ($menu=="P")? 
							'<li><a href="product.php" style="color:black; letter-spacing:1px">Shop</a>
							</li>'
								:
							'<li><a href="product.php" style="color:white; letter-spacing:1px">Shop</a></li>';
							echo ($menu=="A")? 
							'<li><a href="about.php" style="color:black; letter-spacing:1px">About</a></li>'
								:
							'<li><a href="about.php" style="color:white; letter-spacing:1px">About</a></li>';
							echo ($menu=="C")? 
							'<li><a href="contact.php" style="color:black; letter-spacing:1px">Contact</a></li>'
								:
							'<li><a href="contact.php" style="color:white; letter-spacing:1px">Contact</a></li>';

							echo ($menu=="T")? 
							'<li><a href="Sing_Up.php" style="color:black; letter-spacing:1px ">Sign Up</a></li>'
								:
							'<li><a href="Sign_Up.php" style="color:white; letter-spacing:1px">Sign Up</a></li>';
														
						?>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
				<!-- 	<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/header-icon1.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span> -->

					<div class="header-wrapicon2">
						<img src="images/icons/lol.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti"><?php echo $cart; ?></span>

						<!-- Header cart noti -->
					<div class="header-cart header-dropdown" style="width:400px">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20  s-text1 trans-0-4" style= "font-size : 12px;">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20  s-text1 trans-0-4" >
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Mobile -->
		<div class="wrap_header_mobile" style="background-color:#ff4500">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="images/icons/LOGO3.png" width="150px" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">


					<div class="header-wrapicon2">
						<img src="images/icons/lol.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti"><?php echo $count; ?> </span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/matte/kavouge.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Kavouge
										</a>

										<span class="header-cart-item-info">
											1 x 195.00 Php
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/phenomenal/jowain.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											
										</a>

										<span class="header-cart-item-info">
											1 x 195.00 Php
										</span>
									</div>
								</li>
								
							</ul>

							<div class="header-cart-total">
								Total: 390.00 Php
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<!-- <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li> -->

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								timebuea@example.com
							</span>

							<!-- <div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
							,	</select>
							</div> -->
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
						<a href="https://www.facebook.com/Timebeau-by-Yang-1892582744094511/" class="topbar-social-item fa fa-facebook"></a>
						<a href="#" class="topbar-social-item fa fa-instagram"></a>
						<a href="#" class="topbar-social-item fa fa-google mail"></a>
				</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.php">Home</a>
						
						<!-- <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i> -->
					</li>

					<li class="item-menu-mobile">
						<a href="product.php">Shop</a>
						<ul class="sub_menu">
						<li><a href=""></li>
							<li><a href="sets.php">Sets</a></li>
							<li><a href="toners.php">Toners</a></li>
							<li><a href="creams.php">Creams</a></li>
							<li><a href="lotion.php">Lotions</a></li>
							<li><a href="soap.php">Soap</a></li>
							<li><a href="new_prod.php">New Products</a></li>
						</ul>
					</li>


					<li class="item-menu-mobile">
						<a href="about.php">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.php">Contact</a>

					</li>

					<li class="item-menu-mobile">
						<a href="Sign_Up.php">Sign Up</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>