<?php
	session_start();

	require_once('src/TwitterOAuth.php');

	$apiKey ="5GeRCyt189iIK6s1c9n00lNlH";
	$apiSecret = "jy1fpyjcGC061VOutnEOrqacuoA5Hi9Md6Y6tNgS63U4ZIoB1s";
	$accessToken = "4788557236-x2nSWa7C8nz1lvYi4WJfprmsge444sXXHANTxv5";
	$accessSecret = "07IYM885FyBnabZkKGuE1frZCzeKyLHeAhj6oVyVU6I2Q";

	$connection = new TwitterOAuth($apiKey, $apiSecret, $accessToken, $accessSecret);

	$tweets = $connection->get('https://api.twitter.com/1.1/statuses/update.json', array{
		"status"=> "This is a test"
	});

	print_r($tweets);

?>