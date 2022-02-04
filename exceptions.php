<?php

require 'vendor\autoload.php';
use GuzzleHttp\Client; 

$client = new Client();

try{
$response = $client->request( //method call for Client object,
    'GET', //type of HTTP request using one of the verbs
    'https://httpbin.org/status/503' //url the request is going to
); 

var_dump($response);
echo $response->getBody();
} catch (\GuzzleHttp\Exception\ClientException $e) {
    echo $e->getCode() . "\r\n";
    echo $e->getMessage() . "\r\n"; 
} catch (\GuzzleHttp\Exception\ServerException $e) {
    echo $e->getCode() . "\r\n";
    echo $e->getMessage() . "\r\n"; 
}
?>