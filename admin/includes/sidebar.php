<?php  $base_url = "/nailcherie/admin/"; ?>


<!doctype html>
<html lang="en" class="">

<body>
	<!--sidebar wrapper -->
	<div class="sidebar-wrapper" data-simplebar="true">
		<div class="sidebar-header">
			<div>
				<img src="<?php echo $base_url; ?>assets/images/logo-icon2.png" class="logo-icon" alt="logo icon" style="width: max;">
			</div>
			<div>
				<h4 class="logo-text">Nail Cherie</h4>
			</div>
	
		</div>
		<!--navigation-->
		<ul class="metismenu" id="menu">
			<li>
				<a href="<?php echo $base_url;?>dashboard/dashboard.php" class="no-arrow">
					<div class="parent-icon"><i class='bx  bxs-dashboard'    ></i> 
					</div>
					<div class="menu-title">Dashboard</div>
				</a>
			</li>

			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx  bx-shopping-bag'    ></i> 
					</div>
					<div class="menu-title">Products</div>
				</a>
				<ul>
					<li> <a href="<?php echo $base_url;?>products/products-list.php"><i class="bx bx-right-arrow-alt"></i>Products List</a>
					</li>
					<li> <a href="<?php echo $base_url;?>categories/categories-list.php"><i class="bx bx-right-arrow-alt"></i>Categories</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-cart-alt' ></i>
					</div>
					<div class="menu-title">Orders & Reviews</div>
				</a>
				<ul>
					<li> <a href="<?php echo $base_url;?>orders/orders-list.php"><i class="bx bx-right-arrow-alt"></i>Orders</a>
					</li>
					<li> <a href="<?php echo $base_url;?>reviews/reviews-list.php"><i class="bx bx-right-arrow-alt"></i>Reviews</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx  bx-credit-card-alt'    ></i> 
					</div>
					<div class="menu-title">Payment & Shipping</div>
				</a>
				<ul>
					<li> <a href="<?php echo $base_url;?>payment/payment-list.php"><i class="bx bx-right-arrow-alt"></i>Payment</a>
					</li>
					<li> <a href="<?php echo $base_url;?>shipping/shipping-list.php"><i class="bx bx-right-arrow-alt"></i>Shipping</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="<?php echo $base_url;?>info/info.php" class="no-arrow">
					<div class="parent-icon"><i class='bx  bxs-info-circle'    ></i> 
					</div>
					<div class="menu-title">Edit Company's Info</div>
				</a>
			</li>


		<!--end navigation-->
	</div>
	<!--end sidebar wrapper -->
</body>
</html>