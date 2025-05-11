<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');  
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');  
header('Access-Control-Allow-Headers: Content-Type'); 

function get_dollar_rate() {
    $url = 'https://www.cbr-xml-daily.ru/daily_json.js';
    $data = file_get_contents($url);

    return json_decode($data, true);

}

$response = [
    'rate' => get_dollar_rate()['Valute']['USD']['Value'] ?? null,
];
echo json_encode($response);
?>