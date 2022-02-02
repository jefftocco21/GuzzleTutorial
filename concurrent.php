<?php

require 'vendor\autoload.php';
use GuzzleHttp\Client; 
use GuzzleHttp\Utils;
use GuzzleHttp\Promise; 
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;

$client = new Client();

$promise = $client->requestAsync( //method call for Client object,
    'GET', //type of HTTP request using one of the verbs
    'http://jsonplaceholder.typicode.com/posts/1' //url the request is going to, in this case get post with ID of 1
); 

$promise1 = $client->requestAsync( //method call for Client object,
    'GET', //type of HTTP request using one of the verbs
    'http://jsonplaceholder.typicode.com/posts/2' //url the request is going to, in this case get post with ID of 1
); 

$promises = [$promise, $promise1];

//settle method takes array of promises and starts resolving them, then wait method can be cold
$results = GuzzleHttp\Promise\settle($promise)->wait();

foreach ($results as $result){
    echo $result['value']->getBody();
}
?>