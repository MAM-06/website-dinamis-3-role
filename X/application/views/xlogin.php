<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="<?php echo base_url();?>assets/css/x.css" rel="stylesheet" />
	

	</head>
	<body>
	<div class="login-box">  
  		<h2>Login</h2>
  		<form class="sign-up-from form" action="<?php echo base_url('index.php/welcome/user')?>" method="POST">
		      	<form action="<?php echo site_url("welcome/user");?>" class="signin-form">
		      	<div class="form-group">
		      	<input type="text" class="form-control" placeholder="Username" required name=username>
		      	<label>Username</label>
				</div>
	            <div class="form-group">
	            <input id="password-field" type="password" class="form-control" placeholder="Password" required name="password">
	            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
				<label>Password</label>
				</div>
    <a href="user">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>
  </form>
</div>
	</body>
</html>

