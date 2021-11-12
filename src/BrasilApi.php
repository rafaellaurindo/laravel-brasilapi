<?php

namespace RafaelLaurindo\BrasilApi;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class BrasilApi
{
    public function __construct(private string $baseUrl)
    {
    }

    protected function apiClient(): PendingRequest
    {
        return Http::baseUrl($this->getBaseApiUrl())
            ->asJson()
            ->acceptJson();
    }

    protected function getBaseApiUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * Search address using CEP.
     *
     * @param  string  $cep
     * @return object
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function cep(string $cep): object
    {
        return $this->apiClient()->get("/cep/v2/$cep")->throw()->object();
    }
}
