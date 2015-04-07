<?php
	require_once('Googl.class.php');
	$key = 'YOUR_API_KEY';
	$googer = new GoogleURLAPI($key);
	
	$data = $_POST["result"];
	$urls = $data['urls'];
	$urls = trim($urls);
	$urls = explode("\n", $urls);
	$urls = array_filter($urls, 'trim');
	
	foreach ($urls as $longurl) {
		$shortUrl = $googer->shorten($longurl);
		$shorturls[] = $shortUrl;
	}
     
	echo json_encode($shorturls);
	exit();
?>
