<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        // Chamada da model Transacoes_model
        $this->load->model('Transacoes_model');
        // Declaração da hora no sistema
        date_default_timezone_set('America/Sao_Paulo');
    }

    public function index()
    {
        // Validando o POST do formulário
        if($this->input->post()){
            // Pega a hash do boleto gerado na função gerarBoleto dentro da model Transacoes_model
            $hash = $this->Transacoes_model->gerarBoleto($this->input->post());
            // Valida a existencia do hash
            if($hash){
                // Redireciona a página para o boleto gerado com o hash na url
                header("Location: http://www.intermeio.com.br/boleto/$hash");
            }
		}

        // Carrega a view
        $this->load->view('welcome');
    }
}
