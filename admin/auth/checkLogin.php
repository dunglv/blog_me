<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/include/config.php');


if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['checkLogin'])) {
	$submit = $_POST['checkLogin'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	if($email==='vietdungchipro@gmail.com' && $password==='dung123'){
		$_SESSION['_login'] = md5($email);
		header('location: '.$home_url.'/administrator');
	}else{
		header('location: '.$home_url.'/administrator/login');
	}
}else{
		header('location: '.$home_url);
}