<?php

use RafaelLaurindo\BrasilApi\BrasilApi;

if (! function_exists('brasilApi')) {
    /**
     * Helper to get a Brasil Api instance.
     *
     * @return \RafaelLaurindo\BrasilApi\BrasilApi
     */
    function brasilApi(): BrasilApi
    {
        return app(BrasilApi::class);
    }
}
