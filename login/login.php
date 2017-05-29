<?php
	include 'db_connect.php';
	if(!empty($_SESSION['active'])) {
		if($_SESSION['active']==1){
		?>
		<script>document.location.href="../profilcustomer.php";</script>
	<?php }
		elseif($_SESSION['active']==2){
		?>
		<script>document.location.href="../profil.php";</script>
	<?php }
}
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trendy Tab Login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<!-- //js -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Lavender</title>
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<!-- Custom Fonts -->
<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../font-aweseome/css/font-awesome.min.css" type="text/css">
<!-- Plugin CSS -->
<link rel="stylesheet" href="css/animate.min.css" type="text/css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/style1.css" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top">
	<!-- main -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand page-scroll" href="../index.php"><img src="images/logo.png" alt="logolayana"></a>
	</div>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li>
			<a class="page-scroll" href="../index.php">Home</a>
			</li>
			<li>
			<a class="page-scroll" href="../index.php#about">About</a>
			</li>
			<li>
			<a class="page-scroll" href="../index.php#services">Services</a>
			</li>
			<li>
			<a class="page-scroll" href="../index.php#testimonials">Testimony</a>
			</li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
<br>
	<div class="main">
		<h1 data-animation="animated bounceInUp" style="color:white"> Lavender Login Form </h1>
		<div class="login-form">
			<div class="sap_tabs w3ls-tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Customer</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Vendor</span></li>
					</ul>
					<div class="clear"> </div>
					<div class="resp-tabs-container">
						<div class="tab-0 resp-tab-content" aria-labelledby="tab_item-0">
							<div class="login-agileits-top">
								<form action="proseslogin1.php" method="post">
									<div class="col-sm-12 form-group">
									<p>User Name </p>
									<input type="text" name="username_cust" required=""/>
								</div>
								<div class="col-sm-12 form-group">
									<p>Password</p>
									<input type="password" name="password_cust" required=""/>
								</div>
									<input type="checkbox" id="brand" value="">
									<label for="brand"><span></span> Remember me ?</label>
									<input type="submit" value="LOGIN">
								</form>
							</div>
							<div class="login-agileits-bottom">
								<p><a href="./signup.php">Not have an account? Sign up here</a></p>
								<p><a href="../forgot.php">Forgot password?</a></p>
							</div>
						</div>
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
							<div class="login-agileits-top">
								<form action="proseslogin2.php" method="post">
									<p>User Name </p>
									<input type="text" name="username_vendor" required=""/>
									<p>Password</p>
									<input type="password" name="password_vendor" required=""/>
									<input type="checkbox" id="brand" value="">
									<label for="brand"><span></span> Remember me ?</label>
									<input type="submit" value="LOGIN">
								</form>
							</div>
							<div class="login-agileits-bottom">
									<p><a href="./signup.php">Not have an account? Sign up here</a></p>
								<p><a href="#">Forgot password?</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ResponsiveTabs js -->
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
			<!-- //ResponsiveTabs js -->
		</div>
	</div>
	<!-- //main -->

<!-- Section Footer
================================================== -->
<section class="bg-dark">
<div class="container">
<div class="row">
	<div class="col-md-12 text-center">
		<h1 class="bottombrand wow flipInX">Lavender</h1>
		<p>
			a low priced event organizer
		</p>
	</div>
	<br>
	<br>

	<div class="copyright">
		<p> <br> <center> All rights reserved | Created by <a href="http://sinduwinarta.id/" target="_blank">MIPA (Memed, Ihda, Pam, AIR)</center></a></p>
	</div>
	<!-- //copyright -->
</div>
</div>
</section>

</body>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/contact.js"></script>
<script src="js/countto.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/common.js"></script>
</html>
