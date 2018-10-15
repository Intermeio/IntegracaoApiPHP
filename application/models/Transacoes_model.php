<?php

class Transacoes_model extends CI_Model
{
    private $appKey = 'INT67355';
    private $signature = 'I60dYmrytl0WdAl2IEzmfrSnbBrfaHu6h2M76S6zXXc=';

    public function __construct()
    {
        // Chamada da model ApiIntermeio_model
        $this->load->model('ApiIntermeio_model');
    }

    // Função para gerar um token novo
    public function getToken()
    {
        // Gera o autenticador em base 64
        $auth = base64_encode("AppKey:$this->appKey, Signature:$this->signature, Env:dev");
        // Faz a requisição na api chamando o metodo na model ApiIntermeio_model
        $requisicao = $this->ApiIntermeio_model->apiRequest('Token/Gerar', 'POST', [
            'Content-Type: application/json',
            'Content-Length: 0',
            "Authorization: Intermeio $auth",
        ]);

        // Retorno da função com validação se tiver resultado ou não
        if ($requisicao['resultado'] != null) {
            return $requisicao['resultado']['token'];
        } else {
            return ['erro' => $requisicao['requisicao'][0]];
        }

    }

    public function gerarBoleto($boleto)
    {
        // Chama a função getToken para gerar um novo token
        $token = self::getToken();

        // Validação para saber se não tiver token não continua o codigo
        if (empty($token))
            return false;

        // Montando o body da requisição da api para geração do boleto
        $bodyRequest = [
            'Boleto' => [
                "Valor" => $boleto['valor'],
                "DataVencimento" => $boleto['dataVencimento'],
                "NumeroDocumento" => $boleto['numeroDocumento'],
            ],
            'Cliente' => [
                "NomeRazao" => $boleto['nomeRazao'],
                "CpfCnpj" => $boleto['cpfCnpj'],
                "Email" => $boleto['email'],
                "ApelidoEndereco" => $boleto['apelidoEndereco'],
                "CEP" => $boleto['cep'],
                "Logradouro" => $boleto['logradouro'],
                "Endereco" => $boleto['endereco'],
                "Numero" => $boleto['numero'],
                "Bairro" => $boleto['bairro'],
                "Complemento" => $boleto['complemento'],
                "Cidade" => $boleto['cidade'],
                "Estado" => $boleto['estado'],
            ],
        ];

        // Validando para saber se tem split ou não
        if (isset($boleto['split']) && $boleto['split'] != "false") {
            // Tratamento de erro
            if (!isset($boleto['abortarSplit']))
                $boleto['abortarSplit'] = null;

            // Tratamento de erro
            if (!isset($boleto['notificarSmsSplit']))
                $boleto['notificarSmsSplit'] = null;

            // Tratamento de erro
            if (!isset($boleto['notificarEmailSplit']))
                $boleto['notificarEmailSplit'] = null;

            // Incluindo a parte do split dentro da variavel bodyRequest que represente o body da requisição da api para geração do boleto
            $bodyRequest['Split'] = [
                "AbortarEmCasoDeErro" => $boleto['abortarSplit'],
                "Clientes" => [
                    [
                        "NomeRazao" => $boleto['nomeRazaoSplit'],
                        "CpfCnpj" => $boleto['cpfCnpjSplit'],
                        "Email" => $boleto['emailSplit'],
                        "Taxa" => $boleto['taxaSplit'],
                        "NotificarPorSms" => $boleto['notificarSmsSplit'],
                        "NotificarPorEmail" => $boleto['notificarEmailSplit'],
                        "Telefones" => [
                            [
                                "Apelido" => $boleto['apelidoTelefoneSplit'],
                                "DDD" => $boleto['dddSplit'],
                                "Numero" => $boleto['telefoneSplit'],
                            ]
                        ],
                        "ClienteContaBancaria" => [
                            "CodigoBanco" => $boleto['codigoBancoplit'],
                            "Agencia" => $boleto['agenciaBancoplit'],
                            "DigAgencia" => $boleto['digitoBancoplit'],
                            "Conta" => $boleto['contaBancoplit'],
                            "DigConta" => $boleto['digitoContaplit'],
                        ],
                        "TransferenciaAutomatica" => null,
                    ]
                ]
            ];
        }

        // Gera o autenticador em base 64
        $auth = base64_encode("Token:$token, Env:dev");
        // Faz a requisição na api chamando o metodo na model ApiIntermeio_model
        $requisicao = $this->ApiIntermeio_model->apiRequest('Boleto/Gerar', 'POST', [
            'Content-Type: application/json',
            "Authorization: Intermeio $auth",
        ], $bodyRequest);

        // Retorno da função com validação se tiver resultado ou não
        if ($requisicao['resultado'] != null) {
            return $requisicao['resultado']['hashSimplificado'];
        } else {
            return false;
        }

    }

    public function gerarBoletoLote($boleto)
    {
        // Chama a função getToken para gerar um novo token
        $token = self::getToken();

        // Validação para saber se não tiver token não continua o codigo
        if (empty($token))
            return false;

        $bodyRequest = [
            "Boletos" => [
                [
                    "Boleto" => [
                        "Valor" => $boleto['valor'] = "020",
                        "DataVencimento" => $boleto['dataVencimento'] = "10/10/2020",
                        "NumeroDocumento" => $boleto['numeroDocumento'] = "123456789",
                    ],
                    "Cliente" => [
                        "NomeRazao" => $boleto['nomeRazao'] = "Zezinho Juarez",
                        "CpfCnpj" => $boleto['cpfCnpj'] = "14386172084",
                        "Email" => $boleto['email'] = "jose@gmail.com",
                        "ApelidoEndereco" => $boleto['apelidoEndereco'] = "endereco 01",
                        "CEP" => $boleto['cep'] = "03633020",
                        "Logradouro" => $boleto['logradouro'] = "Rua",
                        "Endereco" => $boleto['endereco'] = "Francisco Gonzales",
                        "Numero" => $boleto['numero'] = "94",
                        "Bairro" => $boleto['bairro'] = "Tatuape",
                        "Complemento" => $boleto['complemento'] = "Casa",
                        "Cidade" => $boleto['cidade'] = "Sao Paulo",
                        "Estado" => $boleto['estado'] = "SP",
                    ],
                ],
                [
                    "Boleto" => [
                        "Valor" => $boleto['valor'] = "030",
                        "DataVencimento" => $boleto['dataVencimento'] = "10/10/2020",
                        "NumeroDocumento" => $boleto['numeroDocumento'] = "123456789",
                    ],
                    "Cliente" => [
                        "NomeRazao" => $boleto['nomeRazao'] = "Zezinho Ramez",
                        "CpfCnpj" => $boleto['cpfCnpj'] = "14386172084",
                        "Email" => $boleto['email'] = "jose.r@teste.com",
                        "ApelidoEndereco" => $boleto['apelidoEndereco'] = "endereco 01",
                        "CEP" => $boleto['cep'] = "03633020",
                        "Logradouro" => $boleto['logradouro'] = "Rua",
                        "Endereco" => $boleto['endereco'] = "Oswaldo Cruz",
                        "Numero" => $boleto['numero'] = "94",
                        "Bairro" => $boleto['bairro'] = "Jabaquara",
                        "Complemento" => $boleto['complemento'] = "Casa",
                        "Cidade" => $boleto['cidade'] = "Sao Paulo",
                        "Estado" => $boleto['estado'] = "SP",
                    ],
                ],
            ]
        ];

        // Gera o autenticador em base 64
        $auth = base64_encode("Token:$token, Env:dev");
        // Faz a requisição na api chamando o metodo na model ApiIntermeio_model
        $requisicao = $this->ApiIntermeio_model->apiRequest('Boleto/Lote', 'POST', [
            'Content-Type: application/json',
            "Authorization: Intermeio $auth",
        ], $bodyRequest);

        // Retorno da função com validação se tiver resultado ou não
        if ($requisicao['resultado'] != null)
            return $requisicao;
        else
            return false;

    }

}
