<?php

class ApiIntermeio_model extends CI_Model
{

    private $api_url = 'https://api.intermeio.com.br/v3/';

    public function __construct()
    {

    }

    public function apiRequest($endpoint, $metodo, $headers, $body = false)
    {
        //Inicia o curl
        $ch = curl_init();

        //URL da API
        $url = $this->api_url . $endpoint;

        //Trata o metodo
        if ($metodo === 'POST' || $metodo === 'PUT' || $metodo === 'DELETE') {
            switch ($metodo) {
                case 'POST':
                    curl_setopt($ch, CURLOPT_POST, true);
                    break;
                case 'PUT':
                    curl_setopt($ch, CURLOPT_PUT, true);
                    break;
                case 'DELETE':
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
                    break;
            }

            //Body da requisição
            if ($body) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
            }
        }

        //CURL Options
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POST => true
        ));

        //Pega o retorno
        $jsonRetorno = curl_exec($ch);

        //Decodifica o JSON
        $arrayRetorno = json_decode($jsonRetorno, true);

        $httpStatus = curl_getinfo($ch);
        if($httpStatus['http_code'] >= 400){
            $this->api_url = 'http://api.intermeio.com/v3/';
            self::apiRequest($endpoint, $metodo, $headers, $body);
        }

        //Retorna o Array
        return $arrayRetorno;
    }

}
