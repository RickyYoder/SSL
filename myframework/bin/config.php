<?php
	$config = array(
		"defaultController" => "site",
		"dbName" => "fruits",
		"dbUser" => "root",
		"dbPassword" => "root",
		"baseURL" => "http://127.0.0.1:8080"
	);
	
	$str = $config["baseURL"]."/".$_SERVER['REQUEST_URI'];
	
	$urlPathParts = explode("/",ltrim(parse_url($str, PHP_URL_PATH), "/"));
	
	if($urlPathParts[0] == "myframework") array_shift($urlPathParts);
	
	
	include('router.php');
	
	
	//127.0.0.1:8080/myframework/...
	$route = new router($urlPathParts,$config);
?>