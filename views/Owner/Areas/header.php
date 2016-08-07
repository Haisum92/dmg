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
		<title>Dashboard</title>
 

		<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
		<link href="<?php echo $this->config->item('base_url_assets')?>css/bootstrap.min.css" rel="stylesheet">
		
		<!-- PLUGINS CSS -->
		<link href="<?php echo $this->config->item('base_url_assets')?>plugins/prettify/prettify.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->item('base_url_assets')?>plugins/chosen/chosen.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->item('base_url_assets')?>plugins/validator/bootstrapValidator.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->item('base_url_assets')?>plugins/datatable/css/bootstrap.datatable.min.css" rel="stylesheet">

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
 
	<body class="tooltips top-navigation">