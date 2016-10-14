<section id="create_page">
	<div class="container">
		<div class="row">
			<div class="col-10">
				<div class="title"><h3>Create new post</h3></div>
				<div class="in-create">
					<form action="<?php echo $home_url; ?>/administrator/post/add" method="post" class="form-group" enctype="multipart/form-data"> <!-- start foem -->
						<div class="group-input">
							<div class="name-input">Title</div>
							<div class="form-input">
								<input type="text" name="title" class="input-text" id="title_input">
							</div>
						</div>
						<div class="group-input">
							<div class="name-input">Type</div>
							<div class="form-input">
								<select name="type" id="type_input">
									<option value="post">Post</option>
									<option value="page">Page</option>
								</select>
							</div>
						</div>
						<div class="group-input">
							<div class="name-input">Url path</div>
							<div class="form-input">
								<input type="text" name="url" class="input-text" id="title_input">
							</div>
						</div>
						<div class="group-input">
							<div class="name-input">Description</div>
							<div class="form-input">
								<textarea name="description" id="description_input" cols="30" rows="10"></textarea>
							</div>
						</div>
						<div class="group-input">
							<div class="name-input">Content</div>
							<div class="form-input">
								<textarea name="content" id="content_input" cols="30" rows="10"></textarea>
							</div>
						</div>
						<div class="group-input">
							<div class="name-input">Image</div>
							<div class="form-input">
								<input type="file" name="image" class="input-text" id="image_input">
							</div>
						</div>
						<div class="group-input">
							<div class="name-input">Tag</div>
							<div class="form-input">
								<input type="text" name="tag" class="input-text" id="tag_input">
							</div>
						</div>
						<div class="group-input">
							<div class="form-input">
								<button type="submit" name="add_post" class="input-text" id="tag_input">Thêm mới</button>
							</div>
						</div>
					</form> <!-- end form -->
					<script>
						  CKEDITOR.replace( 'content_input');
					</script>
				</div>
			</div>
		</div>
	</div>
</section>