<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajax extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Transacoes_model');
    }

    // Função de geração do token para apresentar na tela via requisição AJAX
    public function getToken(){
        // Chama a função getToken da model Transacoes_model para geração de um novo token
        echo json_encode($this->Transacoes_model->getToken());
    }
}
