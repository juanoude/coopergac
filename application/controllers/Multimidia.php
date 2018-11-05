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

    public function single($id){
      $cssespecifico = 'multimidia.css';
      $this->load->model('multimidia_model');

      $foto = $this->multimidia_model->buscar($id);

      $dados = [
        'cssespecifico' => $cssespecifico,
        'foto' => $foto
      ];

      $this->load->view("multimidia/single", $dados);
    }

    public function nova_midia(){
      $cssespecifico = 'multimidia.css';
      autorizar();
      $dados = [
        'cssespecifico' => $cssespecifico
      ];

      $this->load->view("multimidia/nova_midia", $dados);

    }

    public function adicionar_foto(){
      //validação
      $this->form_validation->set_error_delimiters('<p class="alert alert-danger" role="alert">', '</p>' );

      $this->form_validation->set_message('required', 'O campo {field} é obrigatório.');
      $this->form_validation->set_message('min_length', 'O campo {field} deve conter no mínimo {param} caracteres.');

      $this->form_validation->set_rules('nome','Nome', 'required|trim');
      $this->form_validation->set_rules('descricao','Descrição', 'required|trim|min_length[10]');
      $this->form_validation->set_rules('data','Data', 'required|trim');

      if(empty($_FILES['foto'])){
        $this->form_validation->set_rules('foto','Foto', 'required');
      }
      //$data_convertida = converterDataParaBanco($this->input->post("data"));

      if($this->form_validation->run() == FALSE){
        $this->nova_midia();
      }else{
        $dados = array(
          "nome" => $this->input->post("nome"),
          "descricao" => $this->input->post("descricao"),
          "data" => $this->input->post("data")
        );

        $foto = $_FILES['foto'];
        //salvar o rótulo no banco
        $this->load->model("multimidia_model");
        $id = $this->multimidia_model->salvarERetornarId($dados);
        $this->upload($id, $foto);
      }
    }

    public function upload($id, $foto){

      //salvar o arquivo do upload
      $config['upload_path'] = './assets/multimidia/';
      $config['allowed_types'] = 'jpg';
      $config['file_name'] = $id.'.jpg';

      $this->load->library('upload', $config);

      if($this->upload->do_upload('foto')){
        $this->session->set_flashdata("success", "Sua foto foi enviada com sucesso");
        redirect('/multimidia');
      }else{
        $this->load->model("multimidia_model");
        $this->multimidia_model->deletar($id);
        $erros = $this->upload->display_errors();
        $this->session->set_flashdata("danger", "Ocorreu um erro ao enviar sua foto: $erros");
        redirect('/multimidia');
      }

    }

  }
