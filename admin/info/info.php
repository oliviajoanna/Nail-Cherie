<?php
/*session_start();
// Cek apakah user sudah login
if (!isset($_SESSION['user'])) {
  header('Location: ../index.php');
  exit;
}*/
?>

<?php  $base_url = "/nailcherie/admin/"; ?>

<!doctype html>
<html lang="en">

<head>
  <?php require '../includes/head.php'; ?>
  <title>Nail Cherie Admin</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">

		<!--SIDEBAR -->
		<?php require '../includes/sidebar.php'; ?>
		<!--end SIDEBAR -->

		<!--start header -->
    	<?php require '../includes/header.php'; ?>
		<!--end header -->

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-xl-9 mx-auto">

						<!--ABOUT US-->
						<h6 class="mb-0 text-uppercase">About Us</h6>
						<hr/>
						<form>
							<div class="card">
								<div class="card-body">
									<label class="form-label">Description</label>
									<div class="input-group">
										<textarea class="form-control" aria-label="With textarea"></textarea>
									</div>
								</div>
							</div>
						</form>
						<!--ABOUT US end-->

						<!--CONTACT US-->
						<h6 class="mb-0 text-uppercase">Contact Us</h6>
						<hr/>
						<form>
							<div class="card">
								<div class="card-body">
									<label class="form-label">Address</label>
									<div class="input-group">
										<textarea class="form-control" aria-label="With textarea"></textarea>
									</div>
									
									<label class="form-label">Email</label>
									<div class="input-group mb-3">
										<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"> <span class="input-group-text" id="basic-addon2">@example.com</span>
									</div>
								</div>
							</div>
						</form>
						<!--ABOUT US end-->

				
					
				
		
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
		
		<!--FOOTER -->
		<?php require '../includes/footer.php'; ?>
		<!--end footer -->

	</div>
	<!--end wrapper-->

</body>

</html>

