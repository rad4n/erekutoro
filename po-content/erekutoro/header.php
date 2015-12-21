<?php if ($mod==""){
	header('location:../../404.php');
}else{
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<!-- Your Basic Site Informations -->
		<title><?php include "title.php"; ?></title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="robots" content="index, follow" />
		<meta name="description" content="<?php include "meta-desc.php"; ?>" />
		<meta name="keywords" content="<?php include "meta-key.php"; ?>" />
		<meta http-equiv="Copyright" content="popojicms" />
		<meta name="author" content="Dadan" />
		<meta http-equiv="imagetoolbar" content="no" />
		<meta name="language" content="Indonesia" />
		<meta name="revisit-after" content="7" />
		<meta name="webcrawlers" content="all" />
		<meta name="rating" content="general" />
		<meta name="spiders" content="all" />
		<!-- Favicons -->
		<link rel="shortcut icon" href="<?=$website_url;?>/<?=$favicon;?>" />
		<!-- Social Media Meta -->
		<?php include "meta-social.php"; ?>

		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width" />

		<!-- Stylesheets -->
		<link href="<?=$website_url;?>/po-content/<?=$folder;?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?=$website_url;?>/po-content/<?=$folder;?>/css/style.css" rel="stylesheet" type="text/css" media="all" />

		<!-- js -->
		<script src="<?=$website_url;?>/po-content/<?=$folder;?>/js/jquery-1.11.1.min.js"></script>
		<!-- //js -->
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Oswald:700,400,300' rel='stylesheet' type='text/css'>


		<script src="https://www.google.com/recaptcha/api.js"></script>
	</head>
	<body>
		<!-- banner -->
		<div class="banner">
			<div class="container">
				<div class="logo">
					<a href="index.html"><label>E</label>lectrix <span>Best Services For You</span></a>
				</div>
				<div class="banner-info">
					<h1><?=$website_name;?></h1>
					<p><?=$meta_description;?></p>
				</div>
				<div class="banner-nav">
					<div class="small-logo">						
						<p>We Build Your Plans</p>
					</div>
					<?php
					$instance = new PoController;
					$menu = $instance->popoji_menu(1, 'class="nav1"', 'class="dropdown-menu"');
					?>
					<?php echo $menu; ?>
				</div>
			</div>
		</div>
		<!-- //banner -->

		<?php } ?>
