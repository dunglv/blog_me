<?php
$protocol = isset($_SERVER['HTTPS'])?'https':'http';
$domain = $_SERVER['HTTP_HOST'];
$path = $_SERVER['PHP_SELF'];
$path = preg_replace('/index.php|\/index.php/i', '', $path);


/**
 * CONFIG URL_HOME
 */
// $url = $domain;
$_url_ = $protocol.'://'.$domain.$path;
define('__URL__', $_url_);

$request_uri = $_SERVER['REQUEST_URI'];
$_current_url_ = $protocol.'://'.$domain.$request_uri;
define('__CURRENT_URL__', $_current_url_);
