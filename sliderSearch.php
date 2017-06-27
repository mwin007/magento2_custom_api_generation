<?php
$access_token = 'tjdux7ur3vu5i2q7xmd53tuh97ujacje';

$searchCriteria = '{
    "criteria": {
        "filter_groups": [
            {
                "filters": [
                    {
                        "field": "title",
                        "value": "%",
                        "condition_type": "like"
                    }
                ]
            }
        ],
        "current_page": 1,
        "page_size": 10,
        "sort_orders": []
    }
}';
    
$searchCriteriaString = http_build_query(json_decode($searchCriteria));
echo  "\n"; 

$ch = curl_init('http://magento2.local/rest/V1/jeffSliderSlide/search?' . $searchCriteriaString);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token)); 

$result = curl_exec($ch);

$obj = json_decode($result);
var_dump($obj->items);
curl_close($ch);
