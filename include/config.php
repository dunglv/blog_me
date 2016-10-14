<?php
session_start();

$_protocol = !empty($_SERVER['HTTPS'])?'https':'http';
$_hostname = $_SERVER['HTTP_HOST'];
$temp_uri = $_SERVER['REQUEST_URI'];

$str_uri = str_replace('index.php', '',  $temp_uri);
// $str_uri = split( '\?', $str_uri);
// $_uri = $str_uri[0];
// echo $_uri;
$home_url = rtrim($_protocol.'://'.$_hostname.'');
// echo dirname(__FILE__);

// exit();

require_once(realpath(dirname(__FILE__).'/database/connect.php'));
// ******************************
// DEFAULT
// ******************************
// session_destroy();
// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';
// echo session_id(); 
// 

checkPage();


$_default = array(
			'title' => 'Lương Viết Dung',
			'description' => 'Trang thông tin Lương Viết Dung là một CV thu gọn được tóm tắt thông tin cá nhân của Lương Viết Dung. Bên cạnh đó là loạt bài viết nằm trong blog riêng tư về cuộc sống hằng ngày trong các lĩnh vực khác nhau.',
			'keyword' => 'luong viet dung, lương viết dung, blog luong viet dung, luongvietdung, cong nghe thong tin, tin tuc hang ngay',

			'image' => $home_url.'/images/blog.jpg',
			'url' => $home_url,
			);




// FUNCION
// 
// 
function checkPage($page='')
{	
	GLOBAL $_default, $home_url, $_title, $_description, $_keyword, $_image, $_url;
	if(isset($_GET['section'])){
		$page = $_GET['section'];
		switch($page){
			case 'blog': 
			$_title = 'Trang chủ blog';
			$_description = 'Tổng hợp các bài viết hay về cuộc sống hằng ngày của dân IT';
			$_keyword = 'blog it,blog luong viet dung,lương viết dung';
			$_image = $home_url.'/images/blog.jpg';
			$_url = $home_url.'/blog';
			break;

			case 'detail': 
			$_title = get_title_detail($_GET['url']);
			$_description = get_description_detail($_GET['url']);
			$_keyword = get_keyword_detail($_GET['url']);
			$_image = get_image_detail($_GET['url']);
			$_url = $home_url.'/blog/'.$_GET['url'];
			break;

			default:
			$_title = $_default['title'];
			$_description = $_default['description'];
			$_keyword = $_default['keyword'];
			$_image = $home_url.'/images/blog.jpg';
			$_url = $home_url;
			break;
		}
	}

}



function get_title()
{
	GLOBAL $_default, $_title;
	if(isset($_title)){
		if(empty($_title)){
			return $_default['title'];
		}
		return $_title;
	}else{
		return $_default['title'];
	}
}

function get_description()
{
	GLOBAL $_default, $_description;

	if (isset($_description)) {
		return $_description;
	}else{
		return $_default['description'];
	}
}

function get_image()
{
	GLOBAL $_default, $_image;

	if (isset($_image)) {
		return $_image;
	}else{
		return $_default['image'];
	}
}


function get_url()
{
	GLOBAL $_default, $_url;

	if (isset($_url)) {
		return $_url;
	}else{
		return $_default['url'];
	}
}

function get_keyword()
{
	GLOBAL $_default, $_keyword;

	if (isset($_keyword)) {
		return $_keyword;
	}else{
		return $_default['keyword'];
	}
}


function get_title_detail($url='')
{
	GLOBAL $dbconnect;
	$sqlTitle = 'SELECT title FROM posts WHERE type="post" AND status =1 AND url = "'.$url.'"';
	$excTitle = mysqli_query($dbconnect, $sqlTitle);
	$rowTitle = mysqli_fetch_assoc($excTitle);
	return $rowTitle['title'];
}

function get_description_detail($url='')
{
	GLOBAL $dbconnect;
	$sqlTitle = 'SELECT description FROM posts WHERE type="post" AND status =1 AND url = "'.$url.'"';
	$excTitle = mysqli_query($dbconnect, $sqlTitle);
	$rowTitle = mysqli_fetch_assoc($excTitle);
	return $rowTitle['description'];
}

function get_image_detail($url='')
{
	GLOBAL $dbconnect;
	$sqlTitle = 'SELECT image FROM posts WHERE type="post" AND status =1 AND url = "'.$url.'"';
	$excTitle = mysqli_query($dbconnect, $sqlTitle);
	$rowTitle = mysqli_fetch_assoc($excTitle);
	return $rowTitle['image'];
}

function get_keyword_detail($url='')
{
	GLOBAL $dbconnect;
	$sqlTitle = 'SELECT tag FROM posts WHERE type="post" AND status =1 AND url = "'.$url.'"';
	$excTitle = mysqli_query($dbconnect, $sqlTitle);
	$rowTitle = mysqli_fetch_assoc($excTitle);
	return $rowTitle['tag'];
}



function is_home($curl='')
{
	GLOBAL $home_url;
	$curl = isset($_SERVER['HTTPS'])?'https':'http'.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if(trim($curl)===trim($home_url) || trim(rtrim($curl, '/'))===trim($home_url)){
		return true;
	}
	return false;
}


function get_url_menu()
{
	GLOBAL $home_url;
	if(is_home()){
		return;
	}else{
		return $home_url;
	}
}