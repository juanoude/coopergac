<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Blog extends CI_Controller{
    public function index(){
      $cssespecifico = "blog.css";

      $this->load->model("blog_model");
      $posts = $this->blog_model->listar();
      $capas = $this->blog_model->listarCapa();

      $dados = [
        'capas' => $capas,
        'posts' => $posts,
        'cssespecifico' => $cssespecifico,
        'titulo' => 'Blog - Notícias - Reflexões'
      ];

      $this->load->view("blog/index", $dados);
    }

    public function novo_post(){
      $cssespecifico = "blog.css";
      autorizar();
      $dados = [
        'cssespecifico' => $cssespecifico,
        'titulo' => 'Adicionando Post'
      ];

      $this->load->view("blog/novo_post", $dados);
    }

    public function adicionar_post(){
      $this->form_validation->set_error_delimiters('<p class="alert alert-danger" role="alert">', '</p>' );

      $this->form_validation->set_message('required', 'O campo {field} é obrigatório.');
      $this->form_validation->set_message('min_length', 'O campo {field} deve conter no mínimo {param} caracteres.');

      $this->form_validation->set_rules('titulo','Titulo', 'required|trim');
      $this->form_validation->set_rules('texto','Texto', 'required|trim|min_length[200]');


      if($_FILES['foto'] ['size'] == 0){
        $this->form_validation->set_rules('foto','Foto', 'required');
      }

      if($this->form_validation->run() == FALSE){
        $this->novo_post();
      }else{
        $dados = array(
          "titulo" => $titulo = $this->input->post('titulo'),
          "texto" => $texto = $this->input->post('texto')
        );
        $this->load->model("blog_model");
        $id = $this->blog_model->salvarERetornarId($dados);
        $foto = $_FILES['foto'];

        $this->salvarFoto($id, $foto);
      }
    }

    public function salvarFoto($id, $foto){
      $config['upload_path'] = './assets/blog/';
      $config['allowed_types'] = 'jpg';
      $config['file_name'] = $id.'.jpg';

      $this->load->library('upload', $config);

      if($this->upload->do_upload('foto')){
        $this->session->set_flashdata("success","Seu post foi adicionado com sucesso");
        redirect("/blog");
      }else{
        $this->load->model("blog_model");
        $this->blog_model->deletar($id);
        $erros = $this->upload->display_errors();
        $this->session->set_flashdata("danger", "Ocorreu um erro ao adicionar o post: $erros");
        redirect("/blog");
      }
    }

    public function single($id){

      $cssespecifico = "blog.css";
      $this->load->model("blog_model");
      $post = $this->blog_model->buscar($id);

      $dados = array(
        'cssespecifico' => $cssespecifico,
        'post' => $post,
        'titulo' => "{$post['titulo']}"
      );

      $this->load->view("blog/single", $dados);

    }

    public function alterar_post(){
      $cssespecifico = "blog.css";
      $id = $this->input->post('id');

      $this->load->model("blog_model");
      $post = $this->blog_model->buscar($id);

      $dados = [
        'cssespecifico' => $cssespecifico,
        'post' => $post,
        'titulo' => "Editar {$post['titulo']}"
      ];
      $this->load->view("blog/alterar_post", $dados);
    }

    public function update(){
      $this->form_validation->set_error_delimiters('<p class="alert alert-danger" role="alert">', '</p>' );

      $this->form_validation->set_message('required', 'O campo {field} é obrigatório.');
      $this->form_validation->set_message('min_length', 'O campo {field} deve conter no mínimo {param} caracteres.');

      $this->form_validation->set_rules('titulo','Titulo', 'required|trim');
      $this->form_validation->set_rules('texto','Texto', 'required|trim|min_length[200]');

      if($this->form_validation->run() == FALSE){
        $this->novo_post();
      }else{
        $id = $this->input->post('id');
        $titulo = $this->input->post('titulo');
        $texto = $this->input->post('texto');

        $this->load->model("blog_model");

        if($_FILES['foto']['size'] != 0){
          $foto = $_FILES['foto'];
          $this->substituirFoto($id, $foto);
        }

        $this->blog_model->atualizar($id, $titulo, $texto);
        $this->session->set_flashdata("success", "Post alterado com sucesso");
        redirect('/adm/painel');

      }

    }

    public function substituirFoto($id, $foto){
      $config['upload_path'] = './assets/blog/';
      $config['overwrite'] = TRUE;
      $config['allowed_types'] = 'jpg';
      $config['file_name'] = $id.'.jpg';

      $this->load->library('upload', $config);

      if(!$this->upload->do_upload('foto')){
        $erros = $this->upload->display_errors();
        $this->session->set_flashdata("danger", "Ocorreu um erro ao enviar sua foto: $erros");
        redirect('/adm/painel');
      }
    }
  }
