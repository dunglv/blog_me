<?php
$_home_path = preg_replace("/(admin\/partials)|(admin\\\\partials)/", '', __DIR__);
// echo $_home_path;
require_once $_home_path.'/include/config.php';
require_once $_home_path.'/include/database/connect.php';
echo $post = $_GET['post'];
// if(isset($_GET['post']) && !empty($_GET['post']) && isset($_GET['action']) && $_GET['action']==='delete'){
// 	$post = $_GET['post'];
// 	$delPost = 'DELETE FROM posts WHERE url="'.$post.'"';
// 	if(mysqli_query($dbconnect, $delPost)){
// 		echo "Xóa thành công.";
// 		echo '<a href="'.$home_url.'/administrator">Back home</a>';
// 	}else{
// 		echo 'Lỗi. Xóa fail';
// 	}
// }else{
// 	if(isset($_GET['post']) && !empty($_GET['post'])){
// 		$post = $_GET['post'];
// 		echo 'Are you sure delete this post?';
// 		echo '<a href="'.$home_url.'/administrator/post/'.$post.'/destroy">Yes</a>';
// 		echo '<br>';
// 		echo '<a href="'.$home_url.'/administrator">No</a>';
// 	}else{
// 		echo 'Lỗi post';
// 	}
// }