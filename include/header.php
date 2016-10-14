<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title><?php if(function_exists('get_title')) echo get_title(); ?></title>
	<link rel="icon"  type="image/x-icon" href="<?php echo $home_url; ?>/images/logo.png">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900&subset=vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $home_url; ?>/libs/carousel/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo $home_url; ?>/libs/carousel/owl.theme.css">
	<link rel="stylesheet" href="<?php echo $home_url; ?>/css/icon/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $home_url; ?>/css/site.css">
	<script src="<?php echo $home_url; ?>/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo $home_url; ?>/libs/carousel/owl.carousel.min.js"></script>
	<script src="<?php echo $home_url; ?>/js/scrollSpeed.js"></script>
	<script src="<?php echo $home_url; ?>/js/site.js"></script>
	
	<!-- Meta -->
	<meta name="title" content="<?php if(function_exists('get_title')) echo get_title(); ?>">
	<meta name="description" content="<?php if(function_exists('get_description')) echo get_description(); ?>">
	<meta name="keywords" content="<?php if(function_exists('get_keyword')) echo get_keyword(); ?>">
	<meta name="author" content="Lương Viết Dung">
	<meta name="copyright" content="<?php if(function_exists('get_url')) echo get_url(); ?>">
	<link rel="canonical" href="<?php echo $home_url; ?>">
	
	<!-- Facebook -->
	<meta property="og:image" content="<?php if(function_exists('get_image')) echo get_image(); ?>">
	<meta property="og:title" content="<?php if(function_exists('get_title')) echo get_title(); ?>">
	<meta property="og:description" content="<?php if(function_exists('get_description')) echo get_description(); ?>">
	<meta property="og:url" content="<?php if(function_exists('get_url')) echo get_url(); ?>">

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@luongvietdung">
	<meta name="twitter:title" content="<?php if(function_exists('get_title')) echo get_title(); ?>">
	<meta name="twitter:description" content="<?php if(function_exists('get_description')) echo get_description(); ?>">
	<meta name="twitter:creator" content="@luongvietdung">
	<meta name="twitter:image" content="<?php if(function_exists('get_image')) echo get_image(); ?>">

	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="<?php if(function_exists('get_title')) echo get_title(); ?>">
	<meta itemprop="description" content="<?php if(function_exists('get_description')) echo get_description(); ?>">
	<meta itemprop="image" content="<?php if(function_exists('get_image')) echo get_image(); ?>">
</head>
<body>
	<header>
		<nav id="menu">
			<div class="container">
				<div class="cv-menubar">
					<div class="cv-menu">
						<span></span>
					</div>
				</div>
				<ul class="main-menu">
					<li><a href="<?php echo $home_url; ?>">Trang chủ</a></li>
					<li><a href="<?php if(function_exists('get_url_menu')) echo get_url_menu(); ?>#quote">Giới thiệu</a></li>
					<li><a href="<?php if(function_exists('get_url_menu')) echo get_url_menu(); ?>#personal">Thông tin</a></li>
					<li><a href="<?php if(function_exists('get_url_menu')) echo get_url_menu(); ?>#learning">Học tập</a></li>
					<li><a href="<?php if(function_exists('get_url_menu')) echo get_url_menu(); ?>#experience">Kinh nghiệm</a></li>
					<li><a href="<?php if(function_exists('get_url_menu')) echo get_url_menu(); ?>#product">Sản phẩm</a></li>
					<li><a href="<?php if(function_exists('get_url_menu')) echo get_url_menu(); ?>#blog">Blog</a></li>
					<li><a href="<?php if(function_exists('get_url_menu')) echo get_url_menu(); ?>#video">Video</a></li>
					<li><a href="<?php if(function_exists('get_url_menu')) echo get_url_menu(); ?>#location">Liên hệ</a></li>
				</ul>
			</div>
		</nav>
		
	</header>