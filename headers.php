<?php

require 'vendor\autoload.php';
use GuzzleHttp\Client; 

$client = new Client();

$response = $client->request( //method call for Client object,
    'GET', //type of HTTP request using one of the verbs
    'http://jsonplaceholder.typicode.com/posts/1' //url the request is going to, in this case get post with ID of 1
); 

var_dump($response);

echo $headers = $response->getHeaders();

foreach ($headers as $name => $value){
    $value = implode(', ', $value);
    echo "{$name}: {$value}\r\n";
}

$type = $response->getHeader('Content-Type');
if (in_array('application/json; charset=utf-8', $type)){
    $body = json_decode($response->getBody());
} else {
    $body =$response->getBody();
}
var_dump($body);
?>