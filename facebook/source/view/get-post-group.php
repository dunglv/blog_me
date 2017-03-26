<?php
session_start();
require_once './source/Facebook/autoload.php';
$fb = new Facebook\Facebook([
	'app_id' => '982256208566545',
	'app_secret' => '168fdb0879ecde2f5472be8da802eb7c',
	'default_graph_version' => 'v2.2'
	]);
$helper = $fb->getRedirectLoginHelper();
 
$permissions = []; // Optional information that your app can access, such as 'email'
$loginUrl = $helper->getLoginUrl('http://luongvietdung.com/facebook/source/includes/login-callback.php', $permissions);
 
echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook</a>';
// $helper = $fb->getRedirectLoginHelper();
// $permissions = []; // optional
// $loginUrl = $helper->getLoginUrl('http://luongvietdung.com/facebook/source/includes/login-callback.php', $permissions);
// echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

// if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['submitGetGroup'])) {
	
// 	// $request = new Facebook\FacebookRequest($fb, $session,'GET','/me');
// 	// $response = $request->execute();
// 	// $graphObject = $response->getGraphObject();
// 	// var_dump($graphObject);
// 	//170667840008977
// 	$helper = $fb->getCanvasHelper();

// try {
//   $accessToken = $helper->getAccessToken();
// } catch(Facebook\Exceptions\FacebookResponseException $e) {
//   // When Graph returns an error
//   echo 'Graph returned an error: ' . $e->getMessage();
//   exit;
// } catch(Facebook\Exceptions\FacebookSDKException $e) {
//   // When validation fails or other local issues
//   echo 'Facebook SDK returned an error: ' . $e->getMessage();
//   exit;
// }

// if (! isset($accessToken)) {
//   echo 'No OAuth data could be obtained from the signed request. User has not authorized your app yet.';
//   exit;
// }

// // Logged in
// echo '<h3>Signed Request</h3>';
// var_dump($helper->getSignedRequest());

// echo '<h3>Access Token</h3>';
// var_dump($accessToken->getValue());
// 	$request = $fb->request('GET', '/me');

// 	// Send the request to Graph
// 	try {
// 	  $response = $fb->getClient()->sendRequest($request);
// 	} catch(Facebook\Exceptions\FacebookResponseException $e) {
// 	  // When Graph returns an error
// 	  echo 'Graph returned an error: ' . $e->getMessage();
// 	  exit;
// 	} catch(Facebook\Exceptions\FacebookSDKException $e) {
// 	  // When validation fails or other local issues
// 	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
// 	  exit;
// 	}

// 	$graphNode = $response->getGraphNode();
// 	echo 'User name: ' . $graphNode['name'];
	// }

?>
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
			<div class="form-action">
				<form action="" method="POST" role="form">
					<legend>Get Post From A Group</legend>
					<div class="form-group">
						<label for="">Group ID:</label>
						<input type="text" class="form-control" id="" name="groupId" placeholder="Input ID or Name of Group">
					</div>
					<div class="form-group">
						<label for="">Max of Post:</label>
						<input type="text" class="form-control" id="" placeholder="Get maximum of post..." value="10">
					</div>
					<button type="submit" name="submitGetGroup" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
			<div class="msg-error">
				<ul class="list-error">
					<li><i class="fa fa-remove"></i>This group not in public</li>
					<li><i class="fa fa-remove"></i>ID or Name of group incorrect or not exists</li>
					<li><i class="fa fa-remove"></i>You not connect internet. Please done it</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="results-title">
				<h3>Posts from <a href="#">Không Sợ Chó</a>: <input class="form-control form-inline" type="text" name="ftUser" placeholder="ID or Username"><a class="exp" href="#"><i class="fa fa-file-excel-o"></i>Export to Excel</a></h3>
				<div class="about-gr">
					<span>create at 10/10/2010</span>
					<span>14.000 members</span>
					<span>2 admin</span>
					<span>total 1200 post</span>
					<span class="nn"><i class="fa fa-remove"></i> You not in this group</span>
					<span class="yy"><i class="fa fa-check"></i> You joined this group</span>
				</div>
			</div>
			<div class="results-list">
				<div class="rs-row">
					<div class="thumb fl">
						<div id="thumb-gBd560xMp_wQwrD" class="thumb-own">
							<img src="public/images/ui/avatar.png" alt="Lorem ipsum dolor sit amet.">
						</div>
					</div>
					<div class="fl dt">
						<div class="td-r tus"><a href="#">User name</a><span class="expl"><i class="fa fa-calendar"></i>join 12/1/2016</span><span><i class="fa fa-calendar"></i>post at 12/2/2016 10:10)</span></div>
						<div class="td-r">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum quo rem optio excepturi deleniti porro voluptatem asperiores alias in aliquid...<a href="#">>>remore<<</a></div>
					</div>
					</div><!-- end row -->
					<div class="rs-row">
						<div class="thumb fl">
							<div id="thumb-gBd560xMp_wQwrD" class="thumb-own">
								<img src="public/images/ui/avatar.png" alt="Lorem ipsum dolor sit amet.">
							</div>
						</div>
						<div class="fl dt">
							<div class="td-r tus"><a href="#">User name</a><span class="expl"><i class="fa fa-calendar"></i>join 12/1/2016</span><span><i class="fa fa-calendar"></i>post at 12/2/2016 10:10)</span></div>
							<div class="td-r">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum quo rem optio excepturi deleniti porro voluptatem asperiores alias in aliquid...<a href="#">>>remore<<</a></div>
						</div>
						</div><!-- end row -->
						<div class="rs-row">
							<div class="thumb fl">
								<div id="thumb-gBd560xMp_wQwrD" class="thumb-own">
									<img src="public/images/ui/avatar.png" alt="Lorem ipsum dolor sit amet.">
								</div>
							</div>
							<div class="fl dt">
								<div class="td-r tus"><a href="#">User name</a><span class="expl"><i class="fa fa-calendar"></i>join 12/1/2016</span><span><i class="fa fa-calendar"></i>post at 12/2/2016 10:10)</span></div>
								<div class="td-r">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum quo rem optio excepturi deleniti porro voluptatem asperiores alias in aliquid...<a href="#">>>remore<<</a></div>
							</div>
							</div><!-- end row -->
							<div class="rs-row">
								<div class="thumb fl">
									<div id="thumb-gBd560xMp_wQwrD" class="thumb-own">
										<img src="public/images/ui/avatar.png" alt="Lorem ipsum dolor sit amet.">
									</div>
								</div>
								<div class="fl dt">
									<div class="td-r tus"><a href="#">User name</a><span class="expl"><i class="fa fa-calendar"></i>join 12/1/2016</span><span><i class="fa fa-calendar"></i>post at 12/2/2016 10:10)</span></div>
									<div class="td-r">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum quo rem optio excepturi deleniti porro voluptatem asperiores alias in aliquid...<a href="#">>>remore<<</a></div>
								</div>
								</div><!-- end row -->
								<div class="rs-row">
									<div class="thumb fl">
										<div id="thumb-gBd560xMp_wQwrD" class="thumb-own">
											<img src="public/images/ui/avatar.png" alt="Lorem ipsum dolor sit amet.">
										</div>
									</div>
									<div class="fl dt">
										<div class="td-r tus"><a href="#">User name</a><span class="expl"><i class="fa fa-calendar"></i>join 12/1/2016</span><span><i class="fa fa-calendar"></i>post at 12/2/2016 10:10)</span></div>
										<div class="td-r">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum quo rem optio excepturi deleniti porro voluptatem asperiores alias in aliquid...<a href="#">>>remore<<</a></div>
									</div>
									</div><!-- end row -->
									<div class="rs-row">
										<div class="thumb fl">
											<div id="thumb-gBd560xMp_wQwrD" class="thumb-own">
												<img src="public/images/ui/avatar.png" alt="Lorem ipsum dolor sit amet.">
											</div>
										</div>
										<div class="fl dt">
											<div class="td-r tus"><a href="#">User name</a><span class="expl"><i class="fa fa-calendar"></i>join 12/1/2016</span><span><i class="fa fa-calendar"></i>post at 12/2/2016 10:10)</span></div>
											<div class="td-r">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum quo rem optio excepturi deleniti porro voluptatem asperiores alias in aliquid...<a href="#">>>remore<<</a></div>
										</div>
										</div><!-- end row -->
										<div class="rs-row">
											<div class="thumb fl">
												<div id="thumb-gBd560xMp_wQwrD" class="thumb-own">
													<img src="public/images/ui/avatar.png" alt="Lorem ipsum dolor sit amet.">
												</div>
											</div>
											<div class="fl dt">
												<div class="td-r tus"><a href="#">User name</a><span class="expl"><i class="fa fa-calendar"></i>join 12/1/2016</span><span><i class="fa fa-calendar"></i>post at 12/2/2016 10:10)</span></div>
												<div class="td-r">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum quo rem optio excepturi deleniti porro voluptatem asperiores alias in aliquid...<a href="#">>>remore<<</a></div>
											</div>
											</div><!-- end row -->
											<div class="rs-row">
												<div class="thumb fl">
													<div id="thumb-gBd560xMp_wQwrD" class="thumb-own">
														<img src="public/images/ui/avatar.png" alt="Lorem ipsum dolor sit amet.">
													</div>
												</div>
												<div class="fl dt">
													<div class="td-r tus"><a href="#">User name</a><span class="expl"><i class="fa fa-calendar"></i>join 12/1/2016</span><span><i class="fa fa-calendar"></i>post at 12/2/2016 10:10)</span></div>
													<div class="td-r">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum quo rem optio excepturi deleniti porro voluptatem asperiores alias in aliquid...<a href="#">>>remore<<</a></div>
												</div>
												</div><!-- end row -->
											</div>
										</div>
									</div>
								</div>