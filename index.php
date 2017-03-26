<?php require_once(dirname(__FILE__).'/include/config.php'); ?>
<?php require_once(dirname(__FILE__).'/include/database/connect.php'); ?>
<?php require_once(dirname(__FILE__).'/include/header.php'); ?>
<?php 
	if(isset($_GET['section'])){
		switch ($_GET['section']) {
			case 'blog':
				include(dirname(__FILE__).'/include/blog/blog.php');
				break;
			case 'detail':
				include(dirname(__FILE__).'/include/blog/detail.php');
				break;
			case 'tag':
				include(dirname(__FILE__).'/include/tag/index.php');
				break;
			default:
				include(dirname(__FILE__).'/include/404.php');
				break;
		}
	}else{
		include(dirname(__FILE__).'/include/home.php');
	}
?>
<div class="_goToTop"></div>
<div class="o-page"><a href="#">Xem phiên bản cũ</a></div>
<?php require_once(dirname(__FILE__).'/include/footer.php'); ?>
