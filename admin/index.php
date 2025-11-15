<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Nail Cherie – Admin Login</title>
</head>

<body class="bg-lock-screen">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-lock-screen d-flex align-items-center justify-content-center">
			<div class="card shadow-none bg-transparent">
				<div class="card-body p-md-5 text-center">

					<!--PROFILE STARTS-->
					<div class="">
						<img src="assets/images/login-images/login-logo.png" class="mt-5" width="200" alt="" />
					</div>
					<!--PROFILE ENDS-->

					<!--FORM STARTS-->
					<form action="proses-login.php" method="post" class="p-4"
					style="max-width: 400px; margin: 0 auto;">
						<?php if (isset($_SESSION['error'])): ?>
						<div class="alert alert-danger text-center" role="alert">
							<?= $_SESSION['error']; unset($_SESSION['error']); ?>
						</div>
						<?php endif; ?>
						     
						<div class="mb-3 mt-3">
							<input type="text" class="form-control" id="username" name="username" placeholder="Admin Email" required/>
						</div>
						<div class="mb-3 mt-3">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>
						</div>
						<div class="d-grid">
							<button type="submit" class="btn btn-white">Login</button>
						</div>
					</form>
					<!--FORM ENDS-->

				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>