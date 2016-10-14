<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/config.php'); ?>
<form action="<?php echo $home_url.'/administrator/check-login' ?>" method="post">
	<input type="text" name="email" placeholder="Input Email">
	<input type="password" name="password" placeholder="Input password">
	<input type="submit" name="checkLogin" value="Login">
	<input type="reset" value="Nhập lại">
</form>