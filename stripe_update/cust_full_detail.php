<?php
header("Content-Type: application/json");
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.stripe.com/v1/customers/CUSTOMER-ID",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Authorization: Bearer PASTE-STRIPE-SECRET-KEY",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Host: api.stripe.com",
    "Postman-Token: d6caa735-dff8-4064-aca1-0905024de77f,dbbde879-c4be-4dc8-8f1a-3379a1747b7b",
    "User-Agent: PostmanRuntime/7.15.0",
    "accept-encoding: gzip, deflate",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
}
$json_decode = json_decode($response, true);
print_r($json_decode);
 $customer_id = $json_decode['id'];
 $customer_email = $json_decode['email'];
 
 
