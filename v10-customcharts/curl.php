<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://biourja.mnre.gov.in/api/v1/getapplications',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic QmlvdXJqYTpCaW91cmphQDEyMzQ1Njc4OTA='
  ),
));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;

curl_exec($curl);
if (curl_errno($curl)) {
    $error_msg = curl_error($curl);
}
curl_close($curl);

if (isset($error_msg)) {
    echo "<pre>";
	print_r($error_msg);
}