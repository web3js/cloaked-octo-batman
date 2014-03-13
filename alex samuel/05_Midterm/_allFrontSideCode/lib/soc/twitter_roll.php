<?php
error_reporting(E_ALL);

require 'php-sdk/src/temboo.php';

$query = $_GET[q];


$session = new Temboo_Session('**********', '**********', '**********');

$tweets = new Twitter_Search_Tweets($session);

// Get an input object for the Choreo
$tweetsInputs = $tweets->newInputs();

// Set inputs
$tweetsInputs->setAccessToken("30261797-mdtdN4QPo7Kez3eqPj5gzWUuROpx5i0CPJTaemMFN")->setQuery($query)->setAccessTokenSecret("hs4f63SHgOXPjwhCKj1haUQo5pZTN47ArlHNJjTRsNPWQ")->setConsumerSecret("nbz5Lms5q9qNRgdQFabPjs6EGLIPReGmTMPMCBz4")->setConsumerKey("bHIHfkuwdozPR5TEGP38AA");

// Execute Choreo and get results
$tweetsResults = $tweets->execute($tweetsInputs)->getResults();

$jsonResponse = $tweetsResults->getResponse();
$arr = json_decode($jsonResponse);
$results = $arr->statuses;
$json = json_encode($results);

echo($json);

?>
