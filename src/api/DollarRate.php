<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

function getDollarRate()
{
    $url = 'https://www.cbr-xml-daily.ru/daily_json.js';
    $dataDollar = @file_get_contents($url);

    return json_decode($dataDollar, true);

}

$response = [
    'rate' => getDollarRate()['Valute']['USD']['Value'] ?? null,
];
echo json_encode($response);
