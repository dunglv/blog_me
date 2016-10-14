<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/config.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/database/connect.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/admin/partials/header.php'); ?>

<?php
	// Check login
	if(!isset($_SESSION['_login'])&&empty($_SESSION['_login'])){
		header('location: '.$home_url.'/administrator/login');
	}



	if (isset($_GET['action'])){
		switch ($_GET['action']) {
			case 'create':
				require_once($_SERVER['DOCUMENT_ROOT'].'/admin/partials/create.php');
				break;
			
			default:
				require_once($_SERVER['DOCUMENT_ROOT'].'/include/404.php');
				break;
		}

	}else{
		require_once($_SERVER['DOCUMENT_ROOT'].'/admin/partials/home.php');
	}

?>
<div class="_goToTop"></div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>
