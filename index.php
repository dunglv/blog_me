<?php require_once('/include/config.php'); ?>
<?php require_once('/include/database/connect.php'); ?>
<?php require_once('/include/header.php'); ?>
<?php 
	if(isset($_GET['section'])){
		switch ($_GET['section']) {
			case 'blog':
				include('/include/blog/blog.php');
				break;
			case 'detail':
				include('/include/blog/detail.php');
				break;
			default:
				include('/include/404.php');
				break;
		}
	}else{
		include('/include/home.php');
	}
?>
<div class="_goToTop"></div>
<?php require_once('/include/footer.php'); ?>
