		<section id="blog" class="blog-list">
			<div class="container">
				<div class="in-blog">
					<div class="title">
						<h3>Blog của tôi</h3>
					</div>
					<div class="grid-blog">
						<div class="row">
						<?php 
							$sqlAll = 'SELECT * FROM posts ORDER BY id DESC';
							$allPost = mysqli_num_rows(mysqli_query($dbconnect, $sqlAll));
							$sql_list_blog = "SELECT * FROM posts WHERE type='post' AND status=1 ORDER BY id DESC LIMIT 4";
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
						<span class="load-more">Xem nhiều hơn nữa</span>
						<input type="hidden" id="allPost" value="<?php echo $allPost; ?>">
					</div>
				</div>
			</div>
		</section>
<script>
$(document).ready(function(){
	var $btn = $('.load-more');
	var $wrap = $('.grid-blog .row');
	var row = 0;
	var rowperpage = 4; 
	var allPost = Number($('#allPost').val());
	$btn.on('click', function(){
		row = row+rowperpage;
		$.ajax({
			type: 'post',
			data: 'row='+row,
			url: '../include/blog/loadmore.php',
			beforeSend:function(){
                $(".load-more").text("Loading...");
            },
			success: function(data){
				$wrap.append(data);

				if((row+rowperpage)>=allPost){
					$(".load-more").hide();
				}else{
					$(".load-more").text("Xem nhiều hơn nữa");
				}

			},
			error: function(error){

			}
		});

		return false;
	});

});
	
</script>