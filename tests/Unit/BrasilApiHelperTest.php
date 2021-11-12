<?php

namespace RafaelLaurindo\BrasilApi\Tests\Unit;

use RafaelLaurindo\BrasilApi\BrasilApi;
use RafaelLaurindo\BrasilApi\Tests\TestCase;

class BrasilApiHelperTest extends TestCase
{
    public function test_helper_should_returns_a_brasil_api_client_instance()
    {
        $this->assertInstanceOf(BrasilApi::class, brasilApi());
    }
}
