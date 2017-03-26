<?php
$host = 'localhost'; //	mysql.hostinger.vn
$user = 'root'; //u989847471_me
$database = 'a1466580_dung'; //	u989847471_me
$password = '';//toilatoi123

if (mysqli_connect($host, $user, $password, $database)) {
	$dbconnect = mysqli_connect($host, $user, $password, $database);
	mysqli_set_charset($dbconnect, 'utf8');
}else{
	echo "Fail to connect to MySQL";
}

if (mysqli_connect_errno()){
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

function get_single_post($dbconnect, $id='')
{
	$query = mysqli_query('SELECT * FROM posts WHERE id = "'.$id.'"');
	return mysqli_fetch_array($query);
}

function get_all_post($dbconnect='')
{
	$query = mysqli_query('SELECT * FROM posts');
	$post_array = [];
	while($row = mysqli_fetch_array($query)){
		$post_array[] = $row;
	}

	return $post_array;
}

function get_tag_in_post($dbconnect, $post_id)
{
	$query = mysqli_query($dbconnect, 'SELECT *, `t`.`title` AS `t_title` FROM posts_tags pt LEFT JOIN posts p ON pt.post_id=p.id LEFT JOIN tags t ON pt.tag_id=t.id WHERE pt.post_id = '.(int)$post_id);
	$tag_array = [];
	while ($row = mysqli_fetch_assoc($query)) {
		$tag_array[] = $row;
	}
	return $tag_array;
}

function get_all_tag($dbconnect='', $limit=null)
{
	if (!empty($limit)) {
		$query = mysqli_query($dbconnect, 'SELECT * FROM tags LIMIT '.(int)$limit);
	} else {
		$query = mysqli_query($dbconnect, 'SELECT * FROM tags');
	}
	$tag_array = [];
	while ($row = mysqli_fetch_array($query)) {
		$tag_array[] = $row;
	}
	return $tag_array;
}

function get_single_tag($dbconnect, $tag_id)
{
	$query = mysqli_query($dbconnect, 'SELECT * FROM tags WHERE id = '.$tag_id);
	return mysqli_fetch_array($query);
}

function count_post_in_tag($dbconnect, $tag_id='')
{
	$query = mysqli_query($dbconnect, 'SELECT * FROM posts_tags WHERE tag_id = '.$tag_id);
	return mysqli_num_rows($query);
}
