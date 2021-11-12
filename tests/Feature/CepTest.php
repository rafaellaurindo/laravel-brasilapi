<?php

namespace RafaelLaurindo\BrasilApi\Tests\Feature;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use RafaelLaurindo\BrasilApi\Tests\TestCase;

class CepTest extends TestCase
{
    public function test_cep_version_config_should_be_used_in_requests()
    {
        Config::set('brasil-api.cep_version', 'v1');

        $fakeCep = '00100100';

        $fakeResponse = [
            "cep" => $fakeCep,
            "state" => "SP",
            "city" => "São Paulo",
            "neighborhood" => "Jardim América",
            "street" => "Avenida Brasil",
            "service" => "viacep",
        ];

        Http::fake([
            config('brasil-api.base_url') . "/cep/v1/$fakeCep" => Http::response($fakeResponse),
        ]);

        $this->assertEquals($fakeResponse, brasilApi()->cep($fakeCep));
    }

    public function test_it_should_get_an_address_by_cep()
    {
        $fakeCep = '00100100';
        $fakeResponse = [
            "cep" => $fakeCep,
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
            config('brasil-api.base_url') . "/cep/v2/$fakeCep" => Http::response($fakeResponse),
        ]);

        $this->assertEquals($fakeResponse, brasilApi()->cep($fakeCep));
    }
}
