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
								Type
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
						$slPost = 'SELECT * FROM posts WHERE status=1 AND type="post" ORDER BY id DESC LIMIT 10';
						$exc_slPost = mysqli_query($dbconnect, $slPost);
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
								<?php echo $row['type']; ?>
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
								<a href="#" title="Sửa bài viết"><i class="fa fa-edit"></i></a>
								<a href="#" title="Xóa bài viết"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<?php } ?>
					</div> <!-- end table-->
					<div class="pagination">
						<ul class="wrap-page">
							<li><a href="#" class="current-page">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>