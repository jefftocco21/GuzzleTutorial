<?php

require 'vendor\autoload.php';
use GuzzleHttp\Client; 

$client = new Client();

$response = $client->request( //method call for Client object,
    'GET', //type of HTTP request using one of the verbs
    'http://jsonplaceholder.typicode.com/posts/1' //url the request is going to, in this case get post with ID of 1
); 

var_dump($response);
echo $response->getBody();
?>