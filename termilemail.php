<?php 
$curl = curl_init();
$data = array("email_address" => "shola.olu@term.ii", "code" => "092471", "api_key" => "Your API Key",  "email_configuration_id" => "0a53c416-uocj-95af-ab3c306aellc" );

$post_data = json_encode($data);

curl_setopt_array($curl, array(
CURLOPT_URL => 'https://api.ng.termii.com/api/email/otp/send',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => $post_data,
CURLOPT_HTTPHEADER => array(
  'Content-Type: application/json'
),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>