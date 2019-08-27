<?php 
	require_once 'timebeau(CMS)/modules/mod_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Timebeau by Yang</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favico.png" width="300px">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body class="animsition">

	<!-- Header -->
	<?php 
		$menu="H";
		include("header.php");
	?>

	<!-- Slide1 -->
<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">

				<?php  
								$sql6 = "SELECT * FROM slide";
								$result = $conn->query($sql6);
								foreach ($result as $cols) {

				echo '<div class="item-slick1 item2-slick1" style="background-image: url(images/ganda/'.$cols['slideimg'].');">';
					echo '<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">';
						echo '<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="rollIn">
							'.$cols['name'].'
						</h2>';

						echo '<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="lightSpeedIn">
							'.$cols['desc'].'
						</span>';

						echo '<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">';
							// <!-- Button -->
							echo '<a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite  trans-0-4">
								'.$cols['shop'].'
							</a>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
					}
				?>
				
			</div>
		</div>
	</section>


	<!-- Banner -->
		<!-- Banner -->
	<div class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				

                     <?php  
                                                                    
                         $sql = "SELECT * FROM tbl_categories ";
                         $res = $conn->query($sql);
                         while($row = $res->fetch(PDO::FETCH_ASSOC)){
                             ?>

                           

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<div>
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="timebeau(CMS)/<?php echo $row['cat_img'] ?>" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="product.php?categ_id=<?php echo $row['cat_id']; ?>" class="flex-c-m size2 m-text2 bg3  trans-0-4"><b>
							 <?php echo $row['category']; ?></b>
							</a>
						</div>
					</div>
	
				</div>
				</div>
				  <?php
                         }

                     ?>
			</div>
		</div>
	</div>

<!-- Banner video -->
	<section class="parallax0 parallax100" style="background-image: url(images/icons/tae.jpg);">
		<div class="overlay0 p-t-190 p-b-200">
			<div class="flex-col-c-m p-l-15 p-r-15">
				<span class="m-text9 p-t-45 fs-20-sm">
					LIKE AND FOLLOW US ON FACEBOOK
				</span>

				<h3 class="l-text1 fs-35-sm">
					Timebeau by Yang
				</h3>

		
			</div>
		</div>
	</section>

	<!-- Our product -->
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<div class="sec-title p-b-22">
				<h3 class="m-text5 t-center">
					Featured Products
				</h3>
			</div>

				<!-- Slide1 -->
<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">	

				<?php  			
								$sql5 = "SELECT * FROM feature";
								$result = $conn->query($sql5);
								foreach ($result as $cols) {

		echo '<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">';
								// <!-- Block2 -->
								echo '<div class="block2">';
									echo '<div class="block2-img wrap-pic-w of-hidden pos-relative ">';
										echo '<center><img src="images/features/'.$cols['fimg'].'" alt="IMG-PRODUCT" style="height: 500px; width: 500px;"><center>';

										echo '<div class="block2-overlay trans-0-4">';
											echo '<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">';
												echo '<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>';
												echo '<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>';
											echo '</a>';

											echo '<div class="block2-btn-addcart w-size1 trans-0-4">';
												// <!-- Button -->
												echo '<button class="flex-c-m size1 bg4 bo-rad-23  s-text1 trans-0-4">
													Add to Cart
												</button>';
											echo '</div>';
										echo '</div>';
									echo '</div>';

									echo '<div class="block2-txt p-t-20">';
										echo '<a href="#" class="block2-name dis-block s-text3 p-b-5">
											'.$cols['fname'].'
										</a>';

										echo '<span class="block2-price m-text6 p-r-5">
											'.$cols['fprice'].'
										</span>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
					}
				?>
				
			</div>
		</div>
	</section>

			
				
			</div>
	</section>

							
							
	

	

	<section class="instagram p-t-20">
		<div class="sec-title p-b-52 p-l-15 p-r-15">
			<!-- <h3 class="m-text5 t-center">
				
				<br> follow us on Instagram <br><a href="https://www.instagram.com/vicecosmeticsph/">@vicecosmetics </a>
			</h3> -->
		</div>

		<div class="flex-w">
			<!-- Block4 -->

			<?php
			// 	$sql1 = "SELECT * FROM instagram";
			// 	$result = $conn->query($sql1);
			// 	foreach ($result as $cols) {

			// 	echo'<div class="block4 wrap-pic-w">';
			// 	echo'<img src="images/ganda/'.$cols['instaimg'].'" alt="IMG-INSTAGRAM">';


			// 	echo'<a href='.$cols['instalink'].' class="block4-overlay sizefull ab-t-l trans-0-4">';
			// 	echo'<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">';
			// 	echo'<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>';
			// 	echo'<span class="p-t-2">'.$cols['hearts'].'</span>';
			// 	echo '</span>';

			// 	echo'<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">';
			// 	echo'<p class="s-text10 m-b-15 h-size1 of-hidden">
			// 	'.$cols['comment'].'
			// 	</p>';

			// 			echo '<span class="s-text9">
			// 				'.$cols['photoby'].'
			// 			</span>';
			// 		echo'</div>';
			// 	echo'</a>';
			// echo'</div>';
			// }
			?>

		
	</section>

	
	

	<!-- Footer -->
	<?php 
		include("footer.php");
	 ?>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/Nt8ZrWY2Cmk?rel=0&amp;showinfo=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
