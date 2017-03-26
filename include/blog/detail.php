<?php 

if (isset($_GET['url'])) {
	// $uri = settype($_GET['url'], "String");
	$uri = $_GET['url'];
	// echo $uri; die();
	$sql_blog = 'SELECT *, DATE_FORMAT(created_at, "%d/%m/%Y") as time_created FROM posts WHERE type="post" AND status=1 AND url="'.$uri.'" LIMIT 1';
	$exc_blog = mysqli_query($dbconnect, $sql_blog);
	if ($exc_blog) {
		if (mysqli_num_rows($exc_blog)>=1) {
			while ($row = mysqli_fetch_array($exc_blog)) {
				$view = (int)$row['view'];
				if(!isset($_SESSION['blog_ip']) && empty($_SESSION['blog_ip'])){
					$_SESSION['blog_ip'] = $_SERVER['REMOTE_ADDR'];
					$view = $view+1;
					$updateView = 'UPDATE posts SET view = "'.(int)$view.'" WHERE id = '.$row['id'];
					mysqli_query($dbconnect, $updateView);
				}
			?> <!-- end tag-->
			<section id="blog" class="detail blog-<?= $row['id']; ?>">
				<div class="container">
					<div class="in-blog ">
						<div class="detail-blog grid-blog">
							<div class="row">
								<div class="col col-10 item">
									<div class="item-blog">
										<div class="title-blog title-p">
											<h1><a href="<?= $home_url.'/article/'.$uri; ?>" title="<?= $row['title']; ?>"><?= $row['title']; ?></a></h1>
										</div>
										<div class="desc-p">
											<span><i class="fa fa-user"></i><a href="#">Dung</a></span>
											<span><i class="fa fa-calendar"></i><?= $row['time_created']; ?></span>
											<span><i class="fa fa-eye"></i><?= $row['view']; ?></span>
										</div>
										<div class="content-p">
											<?= $row['content']; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php if(count(get_tag_in_post($dbconnect, $row['id'])) > 0): ?>
							<div class="block-tag-blog">
								<?php foreach (get_tag_in_post($dbconnect, $row['id']) as $tag) :?>
									<a href="#"><?=$tag['t_title']?></a>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
						<div class="share-link">
							<span>Chia sẻ bài viết</span>
							<a href="https://facebook.com//sharer.php?u=<?= $home_url.'/article/'.$uri; ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');return false;" title="Chia sẻ lên facebook"><img src="<?= $home_url; ?>/images/list/facebook.png" alt="facebook"></a>
							<a href="https://plus.google.com/share?url=<?= $home_url.'/article/'.$uri; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');return false;" title="Chia sẻ lên google+"><img src="<?= $home_url; ?>/images/list/google-plus.png" alt="google plus"></a>
							<a href="https://twitter.com/intent/tweet?original_referer=<?= $home_url.'/article/'.$uri; ?>&ref_src=twsrc%5Etfw&text=<?= $row['title']; ?>&tw_p=tweetbutton&url=<?= $home_url.'/article/'.$uri; ?>&via=luongvietdung" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500');return false;" title="Chia sẻ lên twitter"><img src="<?= $home_url; ?>/images/list/twitter.png" alt="twitter"></a>
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
											<h4><a href="<?= $home_url.'/article/'.$row_other['url']; ?>" title="<?= $row_other['title']; ?>"><?= $row_other['title']; ?></a></h4>
										</div>
										<div class="thumb-blog">
											<img src="<?= $row_other['image']; ?>" alt="<?= $row_other['title']; ?>">
										</div>
										<div class="desc-blog">
											<?= substr($row_other['description'], 0, 250).'...'; ?>
										</div>
									</div>
									<?php 
										} 
									?>
								</div>

								<div class="col col-7">
									<div class="fb-comments" data-href="<?= $home_url.'/article/'.$uri; ?>" data-width="100%" data-numposts="5"></div>
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
		else{
			header('location: '.$home_url.'/404');

		}
	}//end if check execute sql
}//end if check exists $_GET["url"]
 ?>
		

