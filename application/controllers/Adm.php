<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Adm extends CI_Controller {
    public function index(){
      $cssespecifico = 'multimidia.css';

      $dados = [
        'cssespecifico' => $cssespecifico,
      ];

      $this->load->view("adm/index", $dados);
    }

    public function login(){
      $this->load->model("usuario_model");

      $usuario = $this->input->post("usuario");
      $senha = md5($this->input->post("senha"));

      $logado = $this->usuario_model->login($usuario, $senha);

      if($logado){
        $this->session->set_userdata("logado", $logado);
        $this->session->set_flashdata("sucess", "Logado com sucesso");
        redirect("/adm/painel");
      }else{
        $this->session->set_flashdata("danger", "Login ou Senha incorreto(s)");
        redirect("/adm");
      }
    }

    public function painel(){
      $cssespecifico = 'multimidia.css';

      autorizar();

      $dados = [
        'cssespecifico' => $cssespecifico,
      ];

      $this->load->view("adm/painel", $dados);
    }
  }
