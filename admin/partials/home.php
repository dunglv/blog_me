<section id="statistic">
	<div class="container">
		<div class="row">
			<div class="col col-5">
				<div class="wrap-top">
					<div class="tit-top">
						Tổng số lượt ghé thăm
					</div>
					<div class="no-top">
						100
					</div>
				</div>
			</div>
			<div class="col col-5">
				<div class="wrap-top">
					<div class="tit-top">
						Tổng số bài viết
					</div>
					<div class="no-top">
						100
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="new_post">
	<div class="container">
		<div class="row">
			<div class="col col-10">
				<button id="delete_list" data="" class="buttn buttn-red">Delete</button>
			</div>
			<div class="col col-10">
				<div class="in-post">
					<div class="grid-table">
						<div class="p-row p-head">
							<div class="p-col col-05 no-stt">
								No
							</div>
							<div class="p-col col-4 no-title">
								Title post
							</div>
							<div class="p-col col-05 no-type">
								Check
							</div>
							<div class="p-col col-1 no-create">
								Date created
							</div>
							<div class="p-col col-1 no-view">
								No View
							</div>
							<div class="p-col col-1 no-status">
								Status
							</div>
							<div class="p-col col-2 no-action">
								Action
							</div>
						</div>
						<?php 
						$allPost = 'SELECT * FROM posts WHERE status=1 AND type="post"';
						$exc_allPost = mysqli_query($dbconnect, $allPost);
						$totalPost = mysqli_num_rows($exc_allPost);
						
						$postPerPage = 5;
						$totalPage = ceil($totalPost/$postPerPage);

						$startPage = 0;
						$currentPage = 1;

						if(!isset($_GET['page']) || empty($_GET['page']) || $_GET['page'] <=0 || $_GET['page'] > $totalPage){
							$page = 0;
							$currentPage = $page+1;
						}else{
							$page = isset($_GET['page'])?((int)$_GET['page']-1):$startPage;
							$currentPage = $page+1;
						}

						// echo $page; die();
						$slPost = 'SELECT * FROM posts WHERE status=1 AND type="post" ORDER BY id DESC LIMIT '.$page.','.$postPerPage;
						$exc_slPost = mysqli_query($dbconnect, $slPost);
						
						
						// echo $totalPage; die();
						while($row = mysqli_fetch_array($exc_slPost)){
						 ?>
						
						<div class="p-row">
							<div class="p-col col-05 no-stt">
								<?php echo $row['id']; ?>
							</div>
							<div class="p-col col-4 no-title">
								<a href="<?php echo $home_url.'/blog/'.$row['url']; ?>"><?php echo $row['title']; ?></a>
							</div>
							<div class="p-col col-05 no-type">
								<input type="checkbox" id="<?php echo $row['id']; ?>" name="select_post" class="checkbox select-post">
							</div>
							<div class="p-col col-1 no-create">
								<?php echo $row['created_at']; ?>
							</div>
							<div class="p-col col-1 no-view">
								<?php echo $row['view']; ?>
							</div>
							<div class="p-col col-1 no-status">
								<span class="btn btn-status"><?php echo $row['status']; ?></span>
							</div>
							<div class="p-col col-2 no-action">
								<a href="#" title="Ẩn bài viết"><i class="fa fa-eye-slash"></i></a>
								<a href="<?php echo $home_url.'/administrator/post/'.$row['id'].'/edit' ?>" title="Sửa bài viết"><i class="fa fa-edit"></i></a>
								<a onclick="return vd_confirm('Do you want delete this post?');" href="<?php  echo $home_url.'/administrator/post/'.$row['id'].'/delete' ?>" title="Xóa bài viết"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<?php } ?>
					</div> <!-- end table-->
					<div class="pagination">
						<ul class="wrap-page">
							<?php 
							$classActive = '';
							for($i=1; $i<=$totalPage; $i++){
								if($currentPage==$i){
									echo '<li><a href="'.$home_url.'/administrator/page/'.$i.'" class="current-page">'.$i.'</a></li>';
								}else{
									echo '<li><a href="'.$home_url.'/administrator/page/'.$i.'" >'.$i.'</a></li>';
								}
							}

							?>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>