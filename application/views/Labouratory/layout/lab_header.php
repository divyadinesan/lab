<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Laboratory </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Clinical Lab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url('Assets/Labouratory/css/bootstrap.css')?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('Assets/Labouratory/css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="<?php echo base_url('Assets/Labouratory/js/jquery-2.1.4.min.js')?>"></script>
<!-- //js -->
<!--animate-->
<link href="<?php echo base_url('Assets/Labouratory/css/animate.css')?>" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url('Assets/Labouratory/js/wow.min.js')?>"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<link href="<?php echo base_url('Assets/Labouratory/https://fonts.googleapis.com/css?family=Poiret+One&display=swap')?>" rel="stylesheet">
<link href="<?php echo base_url('Assets/Labouratory/https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap')?>" rel="stylesheet">
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url('Assets/Labouratory/js/move-top.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/Labouratory/js/easing.js')?>"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script src="<?php echo base_url('Assets/Labouratory/js/responsiveslides.min.js')?>"></script>
</head>
<body>
<!-- header -->
<div class="header_w3l">
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a  href="index.html">Clinical<span> Lab </span></a></h1>
			</div>
				<!-- top-nav -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					
					<li><a href="<?php echo base_url('Lab/test_add')?>">Add Test</a></li>
					
					<li><a href="<?php echo base_url('Lab/user_request')?>">User Request</a></li>
					<li><a href="<?php echo base_url('Lab/payment_details')?>">Payment Details</a></li>
					<li><a href="<?php echo base_url('Lab/lab_profile')?>">My Profile</a></li>
					<li><a href="<?php echo base_url('Lab/Logout')?>" >Logout</a></li>
				</ul>	
				<div class="clearfix"> </div>	
			</div>
		</nav>
	</div>
</div>