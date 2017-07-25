<?php

session_start();

/**
 * search tweets
 */

require "../vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

/*
 * some api key from app
 * */
$consumer_key = "";
$consumer_secret = "";
$access_token = "";
$access_token_secret = "";

$word = $_POST['request'];
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get("search/tweets", ["q" => $word]);

/*save tweets to session*/
$_SESSION['tweets_global'] = $content;
header("Location: /tweet/twitter/");
die();



