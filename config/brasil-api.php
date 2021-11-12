<?php

return [
    /**
     * Brasil API Base URL.
     *
     * @link https://brasilapi.com.br/docs
     */
    'base_url' => env('BRASIL_API_BASE_URL', 'https://brasilapi.com.br/api'),

    /**
     * The version of CEP API used in requests.
     * Using the `v2` version, the address object will have also the location coordinates.
     *
     * Should be either `v1` or `v2`.
     */
    'cep_version' => env('BRASIL_API_CEP_VERSION', 'v2'),
];
