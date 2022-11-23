<!doctype html>
<html lang="en">
  <head>
  <title>login</title>
	<link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/assets/favicon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url();?>
	assets/login/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(https://images.unsplash.com/photo-1646329169610-0bca29301b55?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center fw-bold ">Assalamualaikum</h3>
				<form class="sign-up-from form" action="<?php echo base_url('index.php/welcome/user')?>" method="POST">
		      	<form action="<?php echo site_url("welcome/user");?>" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" required name=username>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" required name="password">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
					<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
									</div>
								<div class="w-50 text-md-right">
									
								</div>
	            </div>
	          </form>
			  </form>
	          
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo base_url();?>
	assets/login/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>
	assets/login/js/popper.js"></script>
  <script src="<?php echo base_url();?>
	assets/login/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>
	assets/login/js/main.js"></script>

	</body>
</html>

