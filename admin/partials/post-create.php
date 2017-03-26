<section id="create_page">
	<div class="container">
		<div class="row">
			<div class="col-10">
				<div class="title"><h3>Create new post</h3></div>
				<div class="in-create">
					<form action="<?php echo $home_url; ?>/administrator/post/add" method="post" class="form-group" enctype="multipart/form-data"> <!-- start foem -->
						<div class="group-input">
							<div class="name-input">Title Post <span class="force">*</span></div>
							<div class="form-input">
								<input type="text" name="title" class="input-text" id="title_input" autofocus="true">
							</div>
						</div>
						<div class="group-input">
							<div class="name-input">Url path</div>
							<div class="form-input">
								<input type="text" name="url" class="input-text disable" id="url_input" >
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
							<div class="name-input">Thumnail Featured:</div>
							<div class="form-input">
								<div class="form-file">
									<div class="click-form"><i class="fa fa-folder-o"></i> Choose a file...</div>
									<input type="file" name="image" class="input-text" id="image_input">
								</div>
							</div>
						</div>
						<div class="group-input">
							<div class="name-input">Tag</div>
							<div class="form-input">
								<div id="lvd_tag" class="lvd-tag">
									<div id="lvd_tag_content" class="lvd-tag-content">
										<span class="lvd-tag-item">tag1</span>
										<span class="lvd-tag-item">tag2</span>
										<span class="lvd-tag-item">tag3</span>
									</div>
									<div class="lvd-tag-complete">
										<input type="text" class="lvd-tag-input" id="lvd_tag_input" autocomplete="off">
										<ul class="lvd-tag-list">
											
										</ul>
									</div>
									<!-- <input type="text" name="tag" class="input-text" id="tag_input"> -->
								</div>
							</div>
						</div>
						<div class="group-input">
							<div class="name-input"></div>
							<div class="form-input">
								<button type="submit" class="btn" name="add_post" class="input-text" id="add_input">Thêm mới</button>
							</div>
						</div>
					</form> <!-- end form -->
					<script src="<?php echo $home_url; ?>/admin/libs/tinymce/tinymce.min.js"></script>
					<script>
						tinymce.init({
						  selector: '#content_input',
						  height: 500,
						  theme: 'modern',
						  plugins: [
						    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
						    'searchreplace wordcount visualblocks visualchars code fullscreen',
						    'insertdatetime media nonbreaking save table contextmenu directionality',
						    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
						  ],
						  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
						  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
						  image_advtab: true,
						  templates: [
						    { title: 'Test template 1', content: 'Test 1' },
						    { title: 'Test template 2', content: 'Test 2' }
						  ],
						  content_css: [
						    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
						    '//www.tinymce.com/css/codepen.min.css'
						  ]
						 });
					</script>
				</div>
			</div>
			
		</div>
	</div>
</section>