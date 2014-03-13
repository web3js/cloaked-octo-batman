<?php

require 'php-sdk/src/temboo.php';

$session = new Temboo_Session('**********', '**********', '**********');

$authenticate = new Instapaper_Authenticate($session);

// Get an input object for the Choreo
$authenticateInputs = $authenticate->newInputs();

// Set inputs
$authenticateInputs->setUsername("$_GET[u]")->setPassword("$_GET[p]");

// Execute Choreo and get results
$authenticateResults = $authenticate->execute($authenticateInputs)->getResults();

$jsonResponse = $authenticateResults->getResponse();
$echo = json_decode($jsonResponse);

echo $echo;

?>
