<?php

require 'vendor\autoload.php';
use GuzzleHttp\Client; 
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;

$client = new Client();

$promise = $client->requestAsync( //method call for Client object,
    'GET', //type of HTTP request using one of the verbs
    'http://jsonplaceholder.typicode.com/posts/1' //url the request is going to, in this case get post with ID of 1
); 

$promise->then(
    function(Response $response){
        echo $response->getBody(); 
    },
    function (RequestException $e){
        echo $e->getMessage();
    }
);

$promise->wait(); 

?>