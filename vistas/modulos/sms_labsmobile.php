<?php
$auth_basic = base64_encode("crm@peoplebpo.com:Peoplebpo*21%");

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.labsmobile.com/json/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => '{"message":"este es un mensaje de prueba", "tpoa":"Sender","recipient":[{"msisdn":"56983682329"}]}',
  CURLOPT_HTTPHEADER => array(
    "Authorization: Basic ".$auth_basic,
    "Cache-Control: no-cache",
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>