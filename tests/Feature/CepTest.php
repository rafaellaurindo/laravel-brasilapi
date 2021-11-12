<?php

namespace RafaelLaurindo\BrasilApi\Tests\Feature;

use Illuminate\Support\Facades\Http;
use RafaelLaurindo\BrasilApi\Tests\TestCase;

class CepTest extends TestCase
{
    public function test_it_should_get_an_address_by_cep()
    {
        $cep = '01431000';

        $fakeResponse = [
            "cep" => $cep,
            "state" => "SP",
            "city" => "São Paulo",
            "neighborhood" => "Jardim América",
            "street" => "Avenida Brasil",
            "service" => "viacep",
            "location" => [
                "type" => "Point",
                "coordinates" => [
                    "longitude" => "-48.7208861",
                    "latitude" => "-22.5258986",
                ],
            ],
        ];

        Http::fake([
            config('brasil-api.base_url') . "/cep/v2/$cep" => Http::response($fakeResponse),
        ]);

        $this->assertEquals(json_decode(json_encode($fakeResponse)), brasilApi()->cep($cep));
    }
}
