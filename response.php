<?php

require 'vendor\autoload.php';
use GuzzleHttp\Client; 

$client = new Client();

$response = $client->request( //method call for Client object,
    'GET', //type of HTTP request using one of the verbs
    'http://jsonplaceholder.typicode.com/posts/1' //url the request is going to, in this case get post with ID of 1
); 

var_dump($response);
$body = $response->getBody(); //set the body to the responses body 
$string = $body->getContents(); //store the body's string in variable
$json = json_decode($string); //turn the string into a json object

$response = $client->request( //method call for Client object,
    'GET', //type of HTTP request using one of the verbs
    'http://jsonplaceholder.typicode.com/users/' . $json->userId //url the request is going to, in this case get post with ID of 1
); 

var_dump(json_decode($response->getBody()));

echo $response->getStatusCode();
echo $response->getReasonPhrase();
if($response->getStatusCode() != 200){
    echo "Failure";
}
?>