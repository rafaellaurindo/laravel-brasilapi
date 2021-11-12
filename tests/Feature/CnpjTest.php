<?php

namespace RafaelLaurindo\BrasilApi\Tests\Feature;

use Illuminate\Support\Facades\Http;
use RafaelLaurindo\BrasilApi\Tests\TestCase;

class CnpjTest extends TestCase
{
    public function test_it_should_returns_a_company_information_from_cnpj()
    {
        $cnpj = '19131243000197';

        $company = [
            "cnpj" => $cnpj,
            "identificador_matriz_filial" => 1,
            "descricao_matriz_filial" => "Matriz",
            "razao_social" => "OPEN KNOWLEDGE BRASIL",
            "nome_fantasia" => "REDE PELO CONHECIMENTO LIVRE",
            "situacao_cadastral" => 2,
            "descricao_situacao_cadastral" => "Ativa",
            "data_situacao_cadastral" => "2013-10-03",
            "motivo_situacao_cadastral" => 0,
            "nome_cidade_exterior" => "",
            "codigo_natureza_juridica" => 3999,
            "data_inicio_atividade" => "2013-10-03",
            "cnae_fiscal" => 9430800,
            "cnae_fiscal_descricao" => "Atividades de associações de defesa de direitos sociais",
            "descricao_tipo_logradouro" => "AVENIDA",
            "logradouro" => "PAULISTA 37",
            "numero" => "37",
            "complemento" => "ANDAR 4",
            "bairro" => "BELA VISTA",
            "cep" => "01311902",
            "uf" => "SP",
            "codigo_municipio" => 7107,
            "municipio" => "SAO PAULO",
            "ddd_telefone_1" => "11  23851939",
            "ddd_telefone_2" => "",
            "ddd_fax" => "",
            "qualificacao_do_responsavel" => 16,
            "capital_social" => 0,
            "porte" => 5,
            "descricao_porte" => "Demais",
            "opcao_pelo_simples" => false,
            "data_opcao_pelo_simples" => null,
            "data_exclusao_do_simples" => null,
            "opcao_pelo_mei" => false,
            "situacao_especial" => "",
            "data_situacao_especial" => null,
            "qsa" => [
                [
                    "cnpj" => "19131243000197",
                    "identificador_de_socio" => 2,
                    "nome_socio" => "FERNANDA CAMPAGNUCCI PEREIRA",
                    "cnpj_cpf_do_socio" => "",
                    "codigo_qualificacao_socio" => 16,
                    "percentual_capital_social" => 0,
                    "data_entrada_sociedade" => "2019-10-25",
                    "cpf_representante_legal" => "",
                    "nome_representante_legal" => "",
                    "codigo_qualificacao_representante_legal" => 0,
                ],
            ],
            "cnaes_secundarias" => [
                [
                    "codigo" => 9493600,
                    "descricao" => "Atividades de organizações associativas ligadas à cultura e à arte",
                ],
                [
                    "codigo" => 9499500,
                    "descricao" => "Atividades associativas não especificadas anteriormente",
                ],
                [
                    "codigo" => 8599699,
                    "descricao" => "Outras atividades de ensino não especificadas anteriormente",
                ],
                [
                    "codigo" => 8230001,
                    "descricao" => "Serviços de organização de feiras, congressos, exposições e festas",
                ],
                [
                    "codigo" => 6204000,
                    "descricao" => "Consultoria em tecnologia da informação",
                ],
            ],
        ];

        Http::fake([
            config('brasil-api.base_url') . "/cnpj/v1/$cnpj" => Http::response($company),
        ]);

        $this->assertEquals($company, brasilApi()->findCnpj($cnpj));
    }
}
