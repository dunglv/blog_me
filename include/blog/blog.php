		<section id="blog" class="blog-list">
			<div class="container">
				<div class="in-blog">
					<div class="title">
						<h3>BÀI VIẾT</h3>
					</div>
					<div class="tag-blog">
						<div class="list-tag-blog">
							<?php foreach (get_all_tag($dbconnect, 10) as $tag): ?>
							<a href="#"><?=$tag['title']?> <span>[<?=count_post_in_tag($dbconnect, $tag['id'])?>]</span></a>
							<?php endforeach; ?>
						</div>
						<div class="ac-all">
							<a href="<?= $home_url.'/tag'; ?>">See more</a>
						</div>
					</div>
					<div class="grid-blog">
						<div class="row">
						<?php
							$postPerPage = 4;
							$sqlAll = 'SELECT * FROM posts ORDER BY id DESC';
							$allPost = mysqli_num_rows(mysqli_query($dbconnect, $sqlAll));
							$sql_list_blog = "SELECT * FROM posts WHERE type='post' AND status=1 ORDER BY id DESC LIMIT ".$postPerPage;
							$exc_list_blog = mysqli_query($dbconnect, $sql_list_blog);
							if(mysqli_num_rows($exc_list_blog) == 0){
								echo "Blog đang cập nhật. Phiền lòng bạn ghé thăm trang khác";
							}else{
								while($row = mysqli_fetch_array($exc_list_blog)){
									?>
									<div id="blog_<?= $row['id']; ?>" class="col col-5 item">
										<div class="item-blog">
											<div class="title-blog">
												<h4><a href="<?= $home_url.'/article/'.$row['url']; ?>" title="<?= $row['title']; ?>"><?= $row['title']; ?></a></h4>
											</div>
											<div class="thumb-blog">
												<img src="<?= $row['image']; ?>" alt="<?= $row['title']; ?>">
											</div>
											<div class="desc-blog">
												<?= substr($row['description'], 0, 250).'...'; ?>
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
						<?php if($allPost > $postPerPage): ?>
						<span class="load-more">Xem nhiều hơn nữa</span>
						<?php endif; ?>
						<input type="hidden" id="allPost" value="<?= $allPost; ?>">
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
			url: 'include/blog/loadmore.php',
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