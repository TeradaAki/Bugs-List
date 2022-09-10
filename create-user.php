<?php
include "vendor/autoload.php";
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

$client = new Client();
$headers = [
  'Authorization' => 'UF6dUtBKhZkWezH7OBN0Kmafrv1a8LJn', 
  'Content-Type' => 'application/json'
];
$body = '{
  "username": "TeradaGarcia",
  "password": "OCT1999",
  "real_name": "Aki Terada",
  "email": "akiterada99@gmail.com",
  "access_level": {
    "name": "updater"
  },
  "enabled": false,
  "protected": false
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/users/', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();