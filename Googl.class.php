<?php 
// Declare the class
class GoogleUrlApi {
	// Constructor
	function GoogleURLAPI($key,$apiURL = 'https://www.googleapis.com/urlshortener/v1/url') {
		// Keep the API Url
		$this->apiURL = $apiURL.'?key='.$key;
	}
	// Shorten a URL
	function shorten($url) {
		// Send information along
		$response = $this->send($url);
		// Return the result
		return isset($response['id']) ? $response['id'] : false;
	}
	// Send information to Google
	function send($url) {
		
		$postData = array('longUrl' => $url);
		$jsonData = json_encode($postData);
		
		// Create cURL
		$curlObj = curl_init();
		curl_setopt($curlObj,CURLOPT_URL,$this->apiURL);
		curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curlObj, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($curlObj, CURLOPT_HEADER, 0);
		curl_setopt($curlObj, CURLOPT_HTTPHEADER, array("Content-Type: application/json; charset=utf-8","Accept:application/json, text/javascript, */*; q=0.01"));
		curl_setopt($curlObj, CURLOPT_POST, 1);
		curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);
		
		// Execute the post
		$result = curl_exec($curlObj);
		// Close the connection
		curl_close($curlObj);
		// Return the result
		return json_decode($result,true);
	}		
}
?>
