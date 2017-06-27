<?php
$access_token = 'tjdux7ur3vu5i2q7xmd53tuh97ujacje';

$slide = json_encode(['slide' => ['title' => 'API test']]);

$ch = curl_init('http://magento2.local/rest/V1/jeffSliderSlides');

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $slide);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($slide), 'Authorization: Bearer ' . $access_token)); 

$result = curl_exec($ch);

var_dump($result);
curl_close($ch);
