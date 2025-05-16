<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\DollarRateFetcher;

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

$rate = DollarRateFetcher::getDollarRate();

echo json_encode([
    'rate' => $rate,
]);
