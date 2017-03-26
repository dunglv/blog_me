<?php
$_path = preg_replace('/(\/admin\/partials)|(\\\admin\\\partials)/i', '', __DIR__);
require_once $_path.'/include/database/connect.php';
// function delete_post_list()
// {
	GLOBAL $dbconnect;
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && !empty($_POST['id'])) {
		$id = split(',', $_POST['id']);
		for ($i=0; $i < sizeof($id); $i++) {
			$sql = 'DELETE FROM posts WHERE id = "'.$id[$i].'"';
			if (mysqli_query($dbconnect, $sql)) {
				return 1;
			}
		}
	}else{
		return 0;
	}
// }
// delete_post_list();
// if (delete_post_list()==1) {
// 	echo 'ok';
// } else {
// 	echo 'error';
// }
