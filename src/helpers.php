<?php

use RafaelLaurindo\BrasilApi\BrasilApi;

if (! function_exists('brasilApi')) {
    /**
     * Returns a Brasil Api instance.
     *
     * @return BrasilApi
     */
    function brasilApi(): BrasilApi
    {
        return app(BrasilApi::class);
    }
}
