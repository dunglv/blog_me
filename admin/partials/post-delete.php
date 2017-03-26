<?php
if(isset($_GET['post']) && !empty($_GET['post'])){
	$post = $_GET['post'];
	$delPost = 'DELETE FROM posts WHERE id="'.$post.'"';
	if(mysqli_query($dbconnect, $delPost)){
		echo "Xóa thành công.";
		header('Location: '._ADMIN_URL_);
	}else{
		echo 'Lỗi. Xóa fail';
	}
}else{
	if(isset($_GET['post']) && !empty($_GET['post'])){
		$post = $_GET['post'];
		echo 'Are you sure delete this post?';
		echo '<a href="'.$home_url.'/administrator/post/'.$post.'/destroy">Yes</a>';
		echo '<br>';
		echo '<a href="'.$home_url.'/administrator">No</a>';
	}else{
		echo 'Lỗi post';
	}
}