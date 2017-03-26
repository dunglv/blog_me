<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
			<div class="form-action" method="post">
				<form action="" method="POST" role="form">
					<legend>Check Robot</legend>
					<div class="form-group">
						<label for="">Captcha:</label>
						<input type="text" name="captcha" class="form-control" id="" placeholder="Input captcha above...">
					</div>
					<button type="submit" name="checkCaptcha" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php 
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['checkCaptcha'])) {
	$_SESSION['_ttl'] = base64_encode(md5(date('dmYis')));
	header('location: '.__CURRENT_URL__);
}

