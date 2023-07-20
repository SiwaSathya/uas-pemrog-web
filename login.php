<?php include "proces/dbcon.php"?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(assets/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login Dulu Bos</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Punya Akun Mas?</h3>
		      	<form action="proces/proces-login.php" method="post" class="signin-form" id="formLogin">
		      		<div class="form-group">
		      			<input name="username" type="text" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input name="password" id="password-field" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="button" onclick="AlertLogin()" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	
								</div>
								
	            </div>
	          </form>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="assets/js1/jquery.min.js"></script>
  <script src="assets/js1/popper.js"></script>
  <script src="assets/js1/bootstrap.min.js"></script>
  <script src="assets/js1/main.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="assets/js/login.js"></script>

	</body>
</html>

