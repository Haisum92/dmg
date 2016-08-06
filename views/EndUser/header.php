<?php
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Sentir, Responsive admin and dashboard UI kits template">
		<meta name="keywords" content="admin,bootstrap,template,responsive admin,dashboard template,web apps template">
		<meta name="author" content="Ari Rusmanto, Isoh Design Studio, Warung Themes">
		<title>EndUser - DMG</title>
 

		<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
		<link href="<?php echo $this->config->item('base_url_assets')?>css/bootstrap.min.css" rel="stylesheet">
		
		<!-- PLUGINS CSS -->
		<link href="<?php echo $this->config->item('base_url_assets')?>plugins/weather-icon/css/weather-icons.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->item('base_url_assets')?>plugins/prettify/prettify.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->item('base_url_assets')?>plugins/chosen/chosen.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->item('base_url_assets')?>plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->item('base_url_assets')?>plugins/owl-carousel/owl.theme.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->item('base_url_assets')?>plugins/owl-carousel/owl.transitions.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->item('base_url_assets')?>plugins/validator/bootstrapValidator.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->item('base_url_assets')?>plugins/slider/slider.min.css" rel="stylesheet">

		<!-- MAIN CSS (REQUIRED ALL PAGE)-->
		<link href="<?php echo $this->config->item('base_url_assets')?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->item('base_url_assets')?>css/style.css" rel="stylesheet">
		<link href="<?php echo $this->config->item('base_url_assets')?>css/style-responsive.css" rel="stylesheet">
 
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
 
	<body class="enduser">
		<div class="top-navbar dark-color">
				<div class="top-navbar-inner">
					
					<!-- Begin Logo brand -->
					<div class="logo-brand">
						<a href="http://localhost/dmg/"><img src="http://localhost/dmg/structure/assets/img/sentir-logo-primary.png" alt="Sentir logo"></a>
					</div><!-- /.logo-brand -->
					<!-- End Logo brand -->
					
					<div class="top-nav-content main-top-nav-layout">
						
						<!-- Begin button sidebar left toggle -->
						<div class="btn-collapse-main-navigation" data-toggle="collapse" data-target="#top-main-navigation">
							<i class="fa fa-bars"></i>
						</div><!-- /.btn-collapse-sidebar-left -->
						<!-- End button sidebar left toggle -->
						
						<!-- Begin button nav toggle -->
						<div class="btn-collapse-nav" data-toggle="collapse" data-target="#main-fixed-nav">
							<i class="fa fa-plus icon-plus"></i>
						</div><!-- /.btn-collapse-sidebar-right -->
						<!-- End button nav toggle -->
						
						
						<!-- Begin user session nav -->
						<ul class="nav-user navbar-right">
							<li class="dropdown">
							  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
								<img src="http://localhost/dmg/structure/assets/img/avatar/avatar.jpg" class="avatar img-circle" alt="Avatar">
								Hi, <strong>Paris Hawker</strong>
							  </a>
							  <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
								<li><a href="#fakelink">Account setting</a></li>
								<li><a href="#fakelink">Payment setting</a></li>
								<li><a href="#fakelink">Change password</a></li>
								<li><a href="#fakelink">My public profile</a></li>
								<li class="divider"></li>
								<li><a href="lock-screen.html">Lock screen</a></li>
								<li><a href="destroy.me">Log out</a></li>
							  </ul>
							</li>
						</ul>
						<!-- End user session nav -->
						
						<!-- Begin Collapse menu nav -->
						<div class="collapse navbar-collapse" id="main-fixed-nav">
							
						</div><!-- /.navbar-collapse -->
						<!-- End Collapse menu nav -->
					</div><!-- /.top-nav-content -->
				</div><!-- /.top-navbar-inner -->
			</div>
	<script type="text/javascript">
		var site_url = '<?php echo site_url(); ?>';
	</script>