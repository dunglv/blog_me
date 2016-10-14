<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/database/connect.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/include/config.php');

 
$limit = settype($_POST['row'], "integer");
$rowPerPage = 4;
$sql = 'SELECT * FROM posts ORDER BY id DESC LIMIT '.$limit.','.$rowPerPage;
$sqlAll = 'SELECT * FROM posts ORDER BY id DESC';
$exc = mysqli_query($dbconnect, $sql);
$allPost = mysqli_num_rows(mysqli_query($dbconnect, $sqlAll));
$countPost = $limit+$rowPerPage;

while ($row = mysqli_fetch_array($exc)) {
	echo '<div id="blog_'.$row['id'].'" class="col col-5 item">
			<div class="item-blog">
				<div class="title-blog">
					<h4><a href="'.$home_url.'/blog/'.$row['url'].'" title="'.$row['title'].'">'.$row['title'].'</a></h4>
				</div>
				<div class="thumb-blog">
					<img src="'.$home_url.'/images/upload/'.$row['image'].'" alt="'.$row['title'].'">
				</div>
				<div class="desc-blog">
					'.substr($row['description'], 0, 250).'...'.'
				</div>
			</div>
		</div>';
}

