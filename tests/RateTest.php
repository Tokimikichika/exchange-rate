<?php
use PHPUnit\Framework\TestCase;

class RateTest extends TestCase
{
    public function testApiReturnsValidJson()
    {
        $response = file_get_contents('http://localhost:8000/api/rate.php');
        $this->assertJson($response);
        
        $data = json_decode($response, true);
        $this->assertArrayHasKey('rate', $data);
        $this->assertIsFloat($data['rate']);
    }
}