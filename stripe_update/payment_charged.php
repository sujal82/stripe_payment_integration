<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.stripe.com/v1/charges",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "customer=CUSTOMER-ID",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Authorization: Bearer PASTE-STRIPE-SECRET-KEY",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Type: application/x-www-form-urlencoded",
    "Host: api.stripe.com",
    "Postman-Token: 0f42d507-da1d-413c-9a56-79c126698571,b7d5fda7-2350-4fda-aacd-32b8fa8d4498",
    "User-Agent: PostmanRuntime/7.15.0",
    "accept-encoding: gzip, deflate",
    "cache-control: no-cache",
    "content-length: 27"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
print_r($response);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
}
$json_decode = json_decode($response, true);
print_r($json_decode);
?>
