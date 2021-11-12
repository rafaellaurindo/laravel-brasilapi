<?php

namespace RafaelLaurindo\BrasilApi;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class BrasilApi
{
    public function __construct(private string $baseUrl, private string $cepVersion)
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
     * @link https://brasilapi.com.br/docs#tag/CEP-V2
     *
     * @param  string  $cep
     * @return object
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function cep(string $cep): object
    {
        return $this->apiClient()->get("/cep/$this->cepVersion/$cep")->throw()->object();
    }

    /**
     * Returns a list of brazilian banks.
     *
     * @link https://brasilapi.com.br/docs#tag/BANKS
     *
     * @return array
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function getBanks(): array
    {
        return $this->apiClient()->get("/banks/v1")->throw()->json();
    }

    /**
     * Get a bank from code.
     *
     * @link https://brasilapi.com.br/docs#tag/BANKS
     *
     * @param  int  $code
     * @return array
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function getBank(int $code): array
    {
        return $this->apiClient()->get("/banks/v1/$code")->throw()->json();
    }

    /**
     * Find company information using the CNPJ.
     *
     * @link https://brasilapi.com.br/docs#tag/CNPJ
     *
     * @param  string  $cnpj
     * @return array
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function findCnpj(string $cnpj): array
    {
        return $this->apiClient()->get("/cnpj/v1/$cnpj")->throw()->json();
    }
}
