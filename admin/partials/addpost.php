<?php
include $_SERVER['DOCUMENT_ROOT'].'/include/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/include/database/connect.php';
$title = $_POST['title'];
$type_post = $_POST['type'];
$url = $_POST['url'];
$description = $_POST['description'];
$content = $_POST['content'];
$tag = $_POST['tag'];
$image = $_FILES['image']['name'];

date_default_timezone_set("Asia/Ho_Chi_Minh");
$date_created = date("Y-m-d H:i:s");

$dir = $home_url.'/images/upload/'.$_FILES['image']['name'];

$addPost  = 'INSERT INTO posts(type, user, url, title, description, image, content, view, created_at, updated_at, tag,  status) VALUES("'.$type_post.'", "1", "'.$url.'", "'.$title.'", "'.$description.'", "'.$image.'", "'.$content.'", 0, "'.$date_created.'", "'.$date_created.'", "'.$tag.'", 1)';

$exc_add = mysqli_query($dbconnect, $addPost);
if($exc_add){
	echo 'Da theem';
	header('location: '.$home_url.'/administrator/create');
}else{
	echo 'loi';
}