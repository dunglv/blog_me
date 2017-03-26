<?php
	if (isset($_GET['post']) && !empty($_GET['post'])) {
		$post_id = (int)$_GET['post'];
		$query = 'SELECT * FROM posts WHERE id="'.$post_id.'" AND status = 1';
		$query_exc = mysqli_query($dbconnect, $query);
		if (mysqli_connect_errno()) {
			header('Location: '.$home_url);
		}
		if (mysqli_num_rows($query_exc) > 0) {
			// echo gettype(mysqli_fetch_assoc($query_exc)); die;
			// var_dump(mysqli_fetch_assoc($query_exc)[0]['id']);
			$row = mysqli_fetch_assoc($query_exc);
		
?>
	<section id="create_page">
		<div class="container">
			<div class="row">
				<div class="col-10">
					<div class="title"><h3>Update post: <?php echo $row['title']; ?></h3></div>
					<div class="in-create">
						<form action="<?php echo _ADMIN_URL_.'/post/'.$row['id'].'/update'; ?>" method="post" class="form-group" enctype="multipart/form-data"> <!-- start foem -->
							<div class="group-input">
								<div class="name-input">Title</div>
								<div class="form-input">
									<input type="text" name="title" value="<?php echo isset($row)?$row['title']:''; ?>" class="input-text" id="title_input" autofocus="true">
									<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
									<input type="hidden" value="<?php echo $row['image']; ?> name="old_image">
								</div>
							</div>
							<div class="group-input">
								<div class="name-input">Url path</div>
								<div class="form-input">
									<input type="text" name="url" value="<?php echo isset($row)?$row['url']:''; ?>" class="input-text" id="url_input" >
								</div>
							</div>
							<div class="group-input">
								<div class="name-input">Type</div>
								<div class="form-input">
									<select name="type" id="type_input">
										<option <?php echo $row['type']==='post'?'selected':''; ?> value="post">Post</option>
										<option <?php echo $row['type']==='page'?'selected':''; ?> value="page">Page</option>
									</select>
								</div>
							</div>
							
							<div class="group-input">
								<div class="name-input">Description</div>
								<div class="form-input">
									<textarea name="description" id="description_input" cols="30" rows="10"><?php echo isset($row)?$row['description']:''; ?></textarea>
								</div>
							</div>
							<div class="group-input">
								<div class="name-input">Content</div>
								<div class="form-input">
									<textarea name="content" id="content_input" cols="30" rows="10"><?php echo isset($row)?$row['content']:''; ?></textarea>
								</div>
							</div>
							<div class="group-input">
								<div class="name-input">Image</div>
								<div class="show-img">
									<div class="img-preview">
										<img src="<?php echo isset($row)?$row['image']:''; ?>" alt="<?php echo base64_encode($row['title']); ?>">
									</div>
								</div>
								<div class="form-input">
									<input type="file" name="image" class="input-text" id="image_input">
								</div>
							</div>
							<div class="group-input">
								<div class="name-input">Tag</div>
								<div class="form-input">
									<input type="text" name="tag" class="input-text" value="<?php echo isset($row)?$row['tag']:''; ?>" id="tag_input">
								</div>
							</div>
							<div class="group-input">
								<div class="form-input">
									<button type="submit" name="add_post" class="input-text submit-update" id="add_input">Cập nhật</button>
									<a class="input-text button" id="add_input">Hủy bỏ</a>
								</div>
							</div>
						</form> <!-- end form -->
						<script>
							  CKEDITOR.replace( 'content_input', {
						            language: 'vi',
						            entities: false,
						            htmlEncodeOutput: false,
							  });
						</script>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
		}else{
			echo 'Not found your post';
			}
	}
	mysqli_close($dbconnect);