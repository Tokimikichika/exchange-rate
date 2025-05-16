<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\DollarRateFetcher;

$rate = DollarRateFetcher::getDollarRate();

if ($rate !== null) {
    echo "Текущий курс доллара: {$rate}\n";
} else {
    echo "Не удалось получить курс.\n";
}