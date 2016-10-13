		<section id="blog">
			<div class="container">
				<div class="in-blog">
					<div class="title">
						<h3>Blog của tôi</h3>
					</div>
					<div class="grid-blog">
						<div class="row">
						<?php 
							$sql_list_blog = "SELECT * FROM posts WHERE type='post' AND status=1 ORDER BY id DESC";
							$exc_list_blog = mysqli_query($dbconnect, $sql_list_blog);
							if(mysqli_num_rows($exc_list_blog) == 0){
								echo "Blog đang cập nhật. Phiền lòng bạn ghé thăm trang khác";
							}else{
								while($row = mysqli_fetch_array($exc_list_blog)){
									?>
									<div id="blog_<?php echo $row['id']; ?>" class="col col-5 item">
										<div class="item-blog">
											<div class="title-blog">
												<h4><a href="<?php echo $home_url.'/blog/'.$row['url']; ?>" title="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></a></h4>
											</div>
											<div class="thumb-blog">
												<img src="<?php echo $home_url.'/images/upload/'.$row['image']; ?>" alt="<?php echo $row['title']; ?>">
											</div>
											<div class="desc-blog">
												<?php echo substr($row['description'], 0, 250).'...'; ?>
											</div>
										</div>
									</div> <!-- end item -->
									<?php
								}
							}

						 ?>
							
						</div>
					</div>
					<div class="plus-link">
						<a href="#">Xem nhiều hơn nữa</a>
					</div>
				</div>
			</div>
		</section>
