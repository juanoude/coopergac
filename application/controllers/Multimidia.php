<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Multimidia extends CI_Controller {
    public function index(){
      $cssespecifico = 'multimidia.css';
      $this->load->model('multimidia_model');

      $galeria = $this->multimidia_model->listar();

      $dados = [
        'cssespecifico' => $cssespecifico,
        'galeria' => $galeria
      ];

      $this->load->view("multimidia/index", $dados);
    }

    public function nova_midia(){
      $cssespecifico = 'multimidia.css';

      $dados = [
        'cssespecifico' => $cssespecifico
      ];

      $this->load->view("multimidia/nova_midia", $dados);

    }

    public function adicionar_foto(){

      //$data_convertida = converterDataParaBanco($this->input->post("data"));

      $metadados = array(
        "nome" => $this->input->post("nome"),
        "descricao" => $this->input->post("descricao"),
        "data" => $this->input->post("data")
      );

      $foto = $_FILES['foto'];

      //salvar o rotulo no banco
      $this->load->model("multimidia_model");
      $id = $this->multimidia_model->salvarERetornarId($metadados);


      //salvar o arquivo do upload
      $config['upload_path'] = './assets/multimidia/';
      $config['allowed_types'] = 'jpg';
      $config['file_name'] = $id.'.jpg';

      $this->load->library('upload', $config);

      if($this->upload->do_upload('foto')){
        $this->session->set_flashdata("success", "Sua foto foi enviada com sucesso");
        redirect('/multimidia');
      }else{
        $erros = $this->upload->display_errors();
        $this->session->set_flashdata("danger", "Ocorreu um erro ao enviar sua foto: $erros");
        redirect('/multimidia');
      }

    }
  }
