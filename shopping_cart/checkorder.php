<?php
$key = "rzp_test_Qts9SJh5wvAzV1";
$token="jiFUQ6cZ9kvXf8p2JjxOz46L";
$url = "https://api.razorpay.com/v1/orders";
$rec = "KTT_".date('Y'.'m'.'d'.'H','i'.'s');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, $key.":".$token);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('content-type:application/json'));
$data = <<< JSON
{
    "amount": 500,
    "currency": "INR",
    "receipt": "$rec",
    "notes": {
     "name": "$name",
     "email": "$email"
    },
    "partial_payment": true,
    "first_payment_min_amount": 230
}
JSON;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
$decode=json_decode($response);
$orderID = $decode->id;
echo"$orderID";


?>