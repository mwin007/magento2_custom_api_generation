<?php
$access_token = 'tjdux7ur3vu5i2q7xmd53tuh97ujacje';

$slideId = 4;

$ch = curl_init('http://magento2.local/rest/V1/jeffSliderSlide/' . $slideId);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token)); 

$result = curl_exec($ch);

var_dump($result);

curl_close($ch);
