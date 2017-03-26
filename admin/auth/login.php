<?php 
$_path = preg_replace('/(\/admin\/auth\/)|(\\\admin\\\auth)/i', '', __DIR__);
require_once($_path.'/include/config.php');
$home_url = str_replace('/admin', '', $home_url);
define('_ADMIN_URL_', $home_url.'/administrator');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN SYSTEM</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900&subset=vietnamese" rel="stylesheet">
</head>
<body>
	<div class="form-login">
		<div class="title"><h3>LOGIN SYSTEM</h3></div>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="email" placeholder="Input Email" focused="true">
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="Input password">
			</div>
			<div class="form-group">
				<button type="submit" name="checkLogin">Login</button>
				<button type="reset" value="">Nhập lại</button>
			</div>
		</form>
	</div>
	<?php 
		if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['checkLogin'])) {
			$submit = $_POST['checkLogin'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			if($email==='vietdungchipro@gmail.com' && $password==='dung123'){
				$_SESSION['_login'] = md5($email);
				header('location: '._ADMIN_URL_);
			}else{
				header('location: '._ADMIN_URL_.'/login');
			}
		}
	?>
	<style>
		body{
			padding: 0;
			margin: 0;
			background: #fff url(<?php echo $home_url.'/images/bg_header.jpg'; ?>) no-repeat fixed;
			background-size: cover;
			font-family: "Roboto", sans-serif;

		}
		.title h3{
			color: #24c756;
		    font-weight: 900;
		    font-size: 1.5em;
		    text-shadow: 1px 1px 1px #333;
		}
		.form-login{
			padding: 3em 0;
			width: 40%;
			margin: 0 auto;
		}
		.form-login .form-group{
			padding: 10px 0;
		}
		.form-login input, .form-login button{
		    padding: 5px;
		    font-size: 1.2em;
		    border: 1px solid #24c756;
		    color: #333;
		    font-family: "Roboto", sans-serif;
		    width: 100%;
		    outline-color: #24c756;
		    outline-width: 10px;
		    background: rgba(255, 255, 255, 0.5);
		}

		.form-login button:hover, .form-login .button:hover {
		    background: #0d9436;
		    cursor: pointer;
		}
		.form-login button, .form-login .button {
		    width: 100px;
		    float: left;
		    margin-right: 10px;
		    background: #24c756;
		    color: #fff;
		    border: 0;
		}

	</style>
</body>
</html>
