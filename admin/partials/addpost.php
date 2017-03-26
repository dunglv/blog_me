<?php
$adminHomeUrl = str_replace('/admin/partials', '', str_replace('\\', '/',  dirname(__FILE__)));
require_once($adminHomeUrl.'/include/config.php');
require_once($adminHomeUrl.'/include/database/connect.php');
$title = $_POST['title'];
$type_post = $_POST['type'];
$url = $_POST['url'];
$description = $_POST['description'];
$content = $_POST['content'];
$tag = $_POST['tag'];
$image = $_FILES['image']['name'];

date_default_timezone_set("Asia/Ho_Chi_Minh");
$date_created = date("Y-m-d H:i:s");
$checkTitlePost = 'SELECT url FROM posts WHERE status = 1 AND title = "'.$title.'"';
$checkUrlPost = 'SELECT url FROM posts WHERE status = 1 AND url = "'.$url.'"';

if(mysqli_num_rows(mysqli_query($dbconnect, $checkTitlePost)) >= 1 || mysqli_num_rows(mysqli_query($dbconnect, $checkUrlPost)) >= 1){
	echo "Bài viết hoặc Url đã tồn tại trong Database";
	exit();
}else{
	if ($_FILES['image']['size']/1024/1024 > 2) {
		echo "Ảnh quá lớn. Chọn ảnh khác";
	}else{
		$dir = $adminHomeUrl.'/images/upload/';
		$dirReal = $home_url.'/images/upload/'.$_FILES['image']['name'];
		$inforImage = pathinfo($dirReal);

		$extensionImage =  $inforImage['extension'];
		$nameImage =  md5($inforImage['filename']);
		$pathData = $home_url.'/images/upload/'.$nameImage.'.'.$extensionImage;

		move_uploaded_file($_FILES['image']['tmp_name'], $dir.'/'.$nameImage.'.'.$extensionImage);
		$addPost  = 'INSERT INTO posts(type, user, url, title, description, image, content, view, created_at, updated_at, tag,  status) VALUES("'.$type_post.'", "1", "'.$url.'", "'.$title.'", "'.$description.'", "'.$pathData.'", "'.$content.'", 0, "'.$date_created.'", "'.$date_created.'", "'.$tag.'", 1)';
		$exc_add = mysqli_query($dbconnect, $addPost);

		if($exc_add){
			echo 'Thêm thành côn bài viết mới';
			echo '<a href="'.$home_url.'">Về trang chủ</a>&nbsp;|&nbsp;<a href="'.$home_url.'/administrator/create">Tiếp tục thêm bài viết mới</a>';
		}else{
			echo 'Lỗi! Thêm không thành công';
		}
	}
}

