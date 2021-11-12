<?php

namespace RafaelLaurindo\BrasilApi\Tests\Feature;

use Illuminate\Support\Facades\Http;
use RafaelLaurindo\BrasilApi\Tests\TestCase;

class BanksTest extends TestCase
{
    public function test_it_should_returns_a_list_of_banks()
    {
        $banks = [
            [
                "ispb" => "00000000",
                "name" => "BCO DO BRASIL S.A.",
                "code" => 1,
                "fullName" => "Banco do Brasil S.A.",
            ],
            [
                "ispb" => "00038121",
                "name" => "Selic",
                "code" => null,
                "fullName" => "Banco Central do Brasil - Selic",
            ],
            [
                "ispb" => "00038166",
                "name" => "Bacen",
                "code" => null,
                "fullName" => "Banco Central do Brasil",
            ],
        ];

        Http::fake([
            config('brasil-api.base_url') . "/banks/v1" => Http::response($banks),
        ]);

        $this->assertEquals($banks, brasilApi()->getBanks());
    }

    public function test_it_should_returns_the_bank_data_from_code()
    {
        $bankCode = 998;

        $bank = [
            "ispb" => "00126968",
            "name" => "BANCO TEST",
            "code" => $bankCode,
            "fullName" => "Banco TEST S.A.",
        ];

        Http::fake([
            config('brasil-api.base_url') . "/banks/v1/$bankCode" => Http::response($bank),
        ]);

        $this->assertEquals($bank, brasilApi()->getBank($bankCode));
    }
}
