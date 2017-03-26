<?php
$_path = preg_replace('/(\/admin\/partials)|(\\\admin\\\partials)/i', '', __DIR__);
require_once $_path.'/include/config.php';
$title = $_POST['title'];
$id = $_POST['id'];
$type_post = $_POST['type'];
$url = $_POST['url'];
$description = $_POST['description'];
$content = $_POST['content'];
$tag = $_POST['tag'];
if (isset($_FILES['image'])) {
	
}else{
	$image = $_POST['old_image'];
}
date_default_timezone_set("Asia/Ho_Chi_Minh");
$date_created = date("Y-m-d H:i:s");
$checkTitlePost = 'SELECT url FROM posts WHERE status = 1 AND title = "'.$title.'"';
$checkUrlPost = 'SELECT url FROM posts WHERE status = 1 AND url = "'.$url.'"';
if(mysqli_num_rows(mysqli_query($dbconnect, $checkTitlePost)) >= 1 || mysqli_num_rows(mysqli_query($dbconnect, $checkUrlPost)) >= 1){
	if ($_FILES['image']['size']/1024/1024 > 2) {
		echo "Ảnh quá lớn. Chọn ảnh khác";
	}else{
		if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name']) && $_FILES['image']['name'] != "" ) {
			$image = $_FILES['image']['name'];
			$dir = $_path.'/images/upload/';
			$dirReal = $home_url.'/images/upload/'.$_FILES['image']['name'];
			$inforImage = pathinfo($dirReal);
			$extensionImage =  $inforImage['extension'];
			$nameImage =  md5($inforImage['filename']);
			$pathData = $home_url.'/images/upload/'.$nameImage.'.'.$extensionImage;
			move_uploaded_file($_FILES['image']['tmp_name'], $dir.'/'.$nameImage.'.'.$extensionImage);
			$query_update  = 'UPDATE posts SET type = "'.$type_post.'", user="1", url="'.$url.'", title="'.$title.'", description = "'.$description.'", image = "'.$pathData.'", content = "'.$content.'", updated_at = "'.$date_created.'", tag = "'.$tag.'" WHERE id = "'.(int)$id.'"';
		}else{
			$query_update  = 'UPDATE posts SET type = "'.$type_post.'", user="1", url="'.$url.'", title="'.$title.'", description = "'.$description.'", content = "'.$content.'", updated_at = "'.$date_created.'", tag = "'.$tag.'" WHERE id = "'.(int)$id.'"';
			}
		
		$exc_update = mysqli_query($dbconnect, $query_update);
		if($exc_update){
			echo 'Update thành công bài viết';
			echo '<a href="'.$home_url.'">Về trang chủ</a>&nbsp;|&nbsp;<a href="'.$home_url.'/administrator/create">Tiếp tục thêm bài viết mới</a>';
		}else{
			echo 'Lỗi! Update không thành công';
		}
	}
}else{
	echo "Bài viết hoặc Url không tồn tại trong Database";
	exit();
	}