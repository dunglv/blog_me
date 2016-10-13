<?php

$_protocol = !empty($_SERVER['HTTPS'])?'https':'http';
$_hostname = $_SERVER['HTTP_HOST'];
$temp_uri = $_SERVER['REQUEST_URI'];

$str_uri = str_replace('index.php', '',  $temp_uri);
$str_uri = split( '\?', $str_uri);
$_uri = $str_uri[0];
// echo $_uri;
$home_url = rtrim($_protocol.'://'.$_hostname.'');
