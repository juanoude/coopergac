<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Blog extends CI_Controller{
    public function index(){
      $cssespecifico = "blog.css";
      $dados = [
        'cssespecifico' => $cssespecifico
      ];
      $this->load->view("blog/index", $dados);
    }

    public function novo_post(){
      $cssespecifico = "blog.css";
      autorizar();
      $dados = [
        'cssespecifico' => $cssespecifico
      ];

      $this->load->view("blog/novo_post", $dados);
    }
  }
