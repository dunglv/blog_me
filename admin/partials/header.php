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
	<link rel="stylesheet" href="<?php echo $home_url; ?>/admin/css/admin.css">
	<script src="<?php echo $home_url; ?>/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo $home_url; ?>/libs/carousel/owl.carousel.min.js"></script>
	<script src="<?php echo $home_url; ?>/js/scrollSpeed.js"></script>
	<script src="<?php echo $home_url; ?>/admin/libs/ckeditor/ckeditor.js"></script>
	<script src="<?php echo $home_url; ?>/js/site.js"></script>
	
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
					<li><a href="<?php echo $home_url.'/administrator';  ?>">Trang chủ</a></li>
					<li><a href="<?php echo $home_url.'/administrator/all';  ?>">Tất cả bài viết</a></li>
					<li><a href="<?php echo $home_url.'/administrator/create';  ?>">Thêm bài viết</a></li>
					<li><a href="<?php echo $home_url;  ?>">Trang web</a></li>
					
				</ul>
			</div>
		</nav>
		
	</header>