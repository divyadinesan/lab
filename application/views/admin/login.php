
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<head>
<title>login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url('Assets/admin/css/bootstrap.min.css')?>" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url('Assets/admin/css/style.css')?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('Assets/admin/css/style-responsive.css')?>" rel="stylesheet"/>
<!-- font CSS -->
<link href='<?php echo base_url('Assets/admin///fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic')?>' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url('Assets/admin/css/font.css')?>" type="text/css"/>
<link href="<?php echo base_url('Assets/admin/css/font-awesome.css')?>" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?php echo base_url('Assets/admin/js/jquery2.0.3.min.js')?>"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Sign In Now</h2>
		<form action="<?php echo base_url('Admin/log')?>" method="post">
			<input type="email" class="ggg" name="Email" placeholder="E-MAIL" required="">
			<input type="password" class="ggg" name="Password" placeholder="PASSWORD" required="">
			
			
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">

				 <div style="padding-right: 150px">
                    <a href="<?php echo base_url('Index/indexindex')?>" ><img src="<?php echo base_url('Assets/Labouratory/images/home.png')?>" style="height:90px;width:90px;padding-right: 15px;padding-top: 15px" align="right"></a>
                    </div><br><br><br><br>
		</form>

           
		<!-- <p>Don't Have an Account ?<a href="<?php echo base_url('Admin/registration')?>">Create an account</a></p> -->
</div>
</div>
<script src="<?php echo base_url('index.php/Admin/js/bootstrap.js')?>"></script>
<script src="<?php echo base_url('index.php/Admin/js/jquery.dcjqaccordion.2.7.js')?>"></script>
<script src="<?php echo base_url('index.php/Admin/js/scripts.js')?>"></script>
<script src="<?php echo base_url('index.php/Admin/js/jquery.slimscroll.js')?>"></script>
<script src="<?php echo base_url('index.php/Admin/js/jquery.nicescroll.js')?>"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url('index.php/Admin/js/jquery.scrollTo.js')?>"></script>
</body>
</html>
