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

				<!--ISI DI SINI-->
				  
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

