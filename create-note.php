<?php
$client = new Client();
$headers = [
  'Authorization' => 'UF6dUtBKhZkWezH7OBN0Kmafrv1a8LJn',
  'Content-Type' => 'application/json'
];
$body = '{
  "akiterada99@gmail.com": "test note",
  "view_state": {
    "name": "public"
  }
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/issues/[ISSUE_NUMBER]/notes', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();