<?php require_once 'timebeau(CMS)/modules/mod_connection.php'; ?>
<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

				
							<li class="p-t-4">
								<a href="product.php" class="s-text13 ">
									All
								</a>
							</li>
						<?php
						$sql = "SELECT * FROM tbl_categ";
						$res = $conn->query($sql);
						while($row = $res->fetch(PDO::FETCH_ASSOC)){
						?>
							<li class="p-t-4">
								<a href="product.php?categ_id=<?php echo $row['categ_ID']; ?>" class="s-text13 ">
									<?php echo $row['categ_name']; ?>
								</a>
							</li>
						
						<?php
					}
					?>
						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>