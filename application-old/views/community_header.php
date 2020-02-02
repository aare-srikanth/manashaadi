<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

<?php 

$community = $this->uri->segment(1);

if($community=='kamma-matrimony'){ ?>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>Matrimonial Website Kamma Matrimony</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


<?php }elseif ($community=='kapu-matrimony') { ?>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>Matrimonial Website Kapu Matrimony</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<?php }elseif ($community=='reddy-matrimony') { ?>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>Matrimonial Website Reddy Matrimony</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php }elseif ($community=='balija-matrimony') {  ?>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>Matrimonial Website Balija Matrimony</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php } ?>

	



	<link rel="shortcut icon" href="images/fav.png"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>community/css/fontawesome/css/fontawesome.min.css" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>community/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>community/css/custom.css" />
</head>
<body>
<div class="header_top">
	<a href="index"><img src="<?php echo site_url(); ?>community/images/logo.png"></a>
	<div class="header_login">
		<form class="form-inline" action="<?php echo site_url();?>login" method="POST">
			<div class="form-group" >
				<input type="text" class="form-control" id="prependedInput" name="email" id="name" placeholder="E-mail / Manashaadi ID">
			</div>
			<div class="form-group">
				<input type="password" id="prependedInput2" class="form-control" name="password" id="password" placeholder="Password">
				<a class="forgot_password" href="#">Forgot Password?</a>
			</div>
			<input type="submit" class="btn_style" id="home_login" name="submit" value="Login">
		</form>
	</div>
</div>

<header>	
	<nav class="navbar navbar-expand-md greenbg">

	  <!-- Toggler/collapsibe Button -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="fa fa-bars"></span>
	  </button>

	  <!-- Navbar links -->
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="#">Hyderabad</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Vijayawada</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Guntur</a>
	      </li> 
	      <li class="nav-item">
	        <a class="nav-link" href="#">Ongole</a>
	      </li> 
	      <li class="nav-item">
	        <a class="nav-link" href="#">Tirupati</a>
	      </li> 
	    </ul>
	  </div> 
	</nav>
	<!-- Go to Top -->
<button id="myBtn" title="Go to top"><img src="<?php echo site_url(); ?>community/images/top.png"></button>
</header>

