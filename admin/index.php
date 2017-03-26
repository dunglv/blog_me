<?php
$_path = preg_replace('/(\/admin)|(\\\admin)/i', '', __DIR__);
require_once $_path.'/include/config.php';
$home_url = str_replace('/admin', '', $home_url);
define('_ADMIN_URL_', $home_url.'/administrator');

require_once $_path.'/include/database/connect.php';
require_once $_path.'/admin/partials/header.php'; 


	// Check login
	if(!isset($_SESSION['_login'])&&empty($_SESSION['_login'])){
		header('location: '._ADMIN_URL_.'/login');
	}

	if (isset($_GET['action'])){
		switch ($_GET['action']) {
			case 'create':
				require_once $_path.'/admin/partials/post-create.php';
				break;
			case 'add':
				require_once $_path.'/admin/partials/post-add.php';
				break;
			case 'post-delete':
				require_once $_path.'/admin/partials/post-delete.php';
				break;
			case 'post-edit':
				require $_path.'/admin/partials/post-edit.php';
				break;
			default:
				require_once $_path.'/include/404.php';
				break;
		}

	}else{
		require_once  $_path.'/admin/partials/home.php';
	}

?>
<div class="_goToTop"></div>
<?php require_once(str_replace("admin", "", dirname(__FILE__)).'/include/footer.php'); ?>
<script src="<?php echo $home_url; ?>/admin/js/admin-pure.js"></script>
