<?php 
session_start();
include './source/includes/config.php'; 
require_once __DIR__.'/source/Facebook/autoload.php';
$fb = new Facebook\Facebook([
	'app_id' => '982256208566545',
	'app_secret' => '168fdb0879ecde2f5472be8da802eb7c',
	'default_graph_version' => 'v2.7'
	]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facebook Get</title>
	<link rel="stylesheet" href="<?php echo __URL__; ?>/public/style/fonts/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo __URL__; ?>/public/style/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo __URL__; ?>/public/style/ui.css">
</head>
<body>
	<div id="sp_container" class="fix-all">
		<header>
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo __URL__; ?>">FbYour</a>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li <?php echo (isset($_GET['page']) && $_GET['page']=='get-post-group')?'class="active"':''; ?>><a href="<?php echo __URL__; ?>/get-post-group"><i class="fa fa-group"></i> Get post group</a></li>
							<li <?php echo (isset($_GET['page']) && $_GET['page']=='get-post-page')?'class="active"':''; ?>><a href="<?php echo __URL__; ?>/get-post-page"><i class="fa fa-facebook-official"></i> Get post page</a></li>
							<li <?php echo (isset($_GET['page']) && ($_GET['page']=='funny-application' || $_GET['page']=='funny-application-detail'))?'class="active"':''; ?>><a href="<?php echo __URL__; ?>/funny-application"><i class="fa fa-smile-o"></i> Funny Apps</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Link</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</header>
		<main>
			<?php

			if (isset($_SESSION['_ttl']) && !empty($_SESSION['_ttl'])) {
				// Check time to live 
				if (isset($_GET['page']) && $_GET['page']!='') {
					if ($_GET['page']==='funny-application') {
						include './source/view/funny-application.php';
					}elseif ($_GET['page']==='get-post-page') {
						include './source/view/get-post-page.php';
					}elseif ($_GET['page']==='get-post-group') {
						include './source/view/get-post-group.php';
					}
				}else{
					include './source/view/home.php';
				}
			}else{
				include './source/view/robot/ttl.php';
			}
			?>
		</main>
		<footer>
			<div class="ft-nav">
				Copyright 2016&copy;FbYour - Powered by <a href="#">Luvi Jung</a>
			</div>
		</footer>
	</div>
</body>
</html>