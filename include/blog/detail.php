<?php 
if (isset($_GET['url'])) {
	$uri = (string)$_GET['url'];
	$sql_blog = 'SELECT *, DATE_FORMAT(created_at, "%d/%m/%Y") as time_created FROM posts WHERE type="post" AND status=1 AND url="'.$uri.'" LIMIT 1';
	$exc_blog = mysqli_query($dbconnect, $sql_blog);
	if ($exc_blog) {
		if (mysqli_num_rows($exc_blog)>=1) {
			while ($row = mysqli_fetch_array($exc_blog)) {
			?> <!-- end tag-->
			<section id="blog" class="detail blog-<?php echo $row['id']; ?>">
				<div class="container">
					<div class="in-blog ">
						<div class="detail-blog grid-blog">
							<div class="row">
								<div class="col col-10 item">
									<div class="item-blog">
										<div class="title-blog title-p">
											<h1><a href="<?php echo $home_url.'/blog/'.$uri; ?>" title="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></a></h1>
										</div>
										<div class="desc-p">
											<span><i class="fa fa-user"></i><a href="#">Dung</a></span>
											<span><i class="fa fa-calendar"></i><?php echo $row['time_created']; ?></span>
											<span><i class="fa fa-eye"></i><?php echo $row['view']; ?></span>
										</div>
										<div class="content-p">
											<?php echo $row['content']; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="share-link">
							<span>Chia sẻ bài viết</span>
							<a href="https://facebook.com//sharer.php?u=<?php echo $home_url.'/blog/'.$uri; ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');return false;" title="Chia sẻ lên facebook"><img src="<?php echo $home_url; ?>/images/list/facebook.png" alt="facebook"></a>
							<a href="https://plus.google.com/share?url=<?php echo $home_url.'/blog/'.$uri; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');return false;" title="Chia sẻ lên google+"><img src="<?php echo $home_url; ?>/images/list/google-plus.png" alt="google plus"></a>
							<a href="https://twitter.com/intent/tweet?original_referer=<?php echo $home_url.'/blog/'.$uri; ?>&ref_src=twsrc%5Etfw&text=<?php echo $row['title']; ?>&tw_p=tweetbutton&url=<?php echo $home_url.'/blog/'.$uri; ?>&via=luongvietdung" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');return false;" title="Chia sẻ lên twitter"><img src="<?php echo $home_url; ?>/images/list/twitter.png" alt="twitter"></a>
						</div>
						<div class="vd-comment other-item">
							<div class="row">
								
								<div class="col col-3 other-p">
								<?php 
									$sql_blog_other = 'SELECT * FROM posts WHERE type="post" AND status=1 AND id <> "'.$row['id'].'" LIMIT 2';
									$exc_blog_other = mysqli_query($dbconnect, $sql_blog_other);
									while ( $row_other = mysqli_fetch_array($exc_blog_other)) {
								 ?>
									<div class="item-blog">
										<div class="title-blog">
											<h4><a href="<?php echo $home_url.'/blog/'.$row_other['url']; ?>" title="<?php echo $row_other['title']; ?>"><?php echo $row_other['title']; ?></a></h4>
										</div>
										<div class="thumb-blog">
											<img src="<?php echo $home_url.'/images/upload/'.$row_other['image']; ?>" alt="<?php echo $row_other['title']; ?>">
										</div>
										<div class="desc-blog">
											<?php echo substr($row_other['description'], 0, 250).'...'; ?>
										</div>
									</div>
									<?php 
										} 
									?>
								</div>

								<div class="col col-7">
									<div class="fb-comments" data-href="<?php echo $home_url.'/blog/'.$uri; ?>" data-width="100%" data-numposts="5"></div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=982256208566545";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

			<!-- open tag-->
			<?php
			}//end while
		}//end if exists post
	}//end if check execute sql
}//end if check exists $_GET["url"]
 ?>
		

