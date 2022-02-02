<?php 

require 'vendor\autoload.php';
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/']); //create a base uri so it does not have to be defined every time

$response = $client->get(
    'posts/1'
);

var_dump($response);
echo $response->getBody();


$response = $client->get(
    'posts/2'
);

var_dump($response);
echo $response->getBody();


$response = $client->get(
    'https://httpbin.org/ip'
);

var_dump($response);
echo $response->getBody();

?> 