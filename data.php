<?php

require 'vendor\autoload.php';
use GuzzleHttp\Client; 

$client = new Client();

$response = $client->request( //method call for Client object,
    'POST', //type of HTTP request using one of the verbs
    'http://jsonplaceholder.typicode.com/posts', //url the request is going to, in this case get post with ID of 1
    [
        'json' => [
            'title' => 'Guzzle and Rest',
            'body' => 'Guzzle makes working with REST APIs easy.',
            'userId' => 2,
        ],
    ]
); 

var_dump($response);
echo $response->getBody();
?>