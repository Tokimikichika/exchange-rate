<?php

namespace App;

class DollarRateFetcher
{
    public static function getDollarRate(): ?float
    {
        $response = file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js');
        $data = json_decode($response, true);

        return $data['Valute']['USD']['Value'] ?? null;
    }
}
