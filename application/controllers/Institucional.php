<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Institucional extends CI_Controller{
    public function index(){
      $cssespecifico = "institucional.css";
      $dados = [
        'cssespecifico' => $cssespecifico
      ];

      $this->load->view("institucional/index", $dados);
    }

    public function sobre(){
      $cssespecifico = "institucional.css";
      $dados = [
        'cssespecifico' => $cssespecifico
      ];

      $this->load->view("institucional/sobre", $dados);
    }

    public function privacidade(){
      $cssespecifico = "institucional.css";
      $dados = [
        'cssespecifico' => $cssespecifico
      ];

      $this->load->view("institucional/privacidade", $dados);
    }

    public function em_construcao(){
      $cssespecifico = "institucional.css";
      $dados = [
        'cssespecifico' => $cssespecifico
      ];

      $this->load->view("em_construcao", $dados);
    }

    public function contato(){
      $cssespecifico ="institucional.css";

      $dados= [
        'cssespecifico' =>$cssespecifico
      ];


      $this->load->view("institucional/contato", $dados);
    }

    public function email(){
      $this->form_validation->set_error_delimiters('<p class="alert alert-danger" role="alert">', '</p>' );

      $this->form_validation->set_message('required', 'O campo {field} é obrigatório.');
      $this->form_validation->set_message('min_length', '{field} deve ter pelo menos {param} caracteres.');
      $this->form_validation->set_message('valid_email', '{field} deve ser um email válido exemplo@provedor.com');
      $this->form_validation->set_message('integer', '{field} deve conter apenas números.');


      $this->form_validation->set_rules('nome', 'Nome', 'required|trim');
      $this->form_validation->set_rules('titulo', 'Titulo', 'required|min_length[5]|trim');
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
      $this->form_validation->set_rules('mensagem', 'Mensagem', 'required|min_length[20]|trim');
      $this->form_validation->set_rules('telefone', 'Telefone', 'required|trim|min_length[10]');

      if($this->form_validation->run() == FALSE){
        //$this->session->set_flashdata("danger", "Há problema(s):");
        $this->contato();
      }else{
        $nome = $this->input->post('nome');
        $subject = $this->input->post('titulo');
        $email = $this->input->post('email');
        $mensagem = $this->input->post('mensagem');
        $telefone = $this->input->post('telefone');

        $this->enviarEmail($nome,$subject,$email,$mensagem,$telefone);
      }
    }

    public function enviarEmail($nome,$subject,$email,$mensagem,$telefone){
      $this->load->library("email");
      $this->load->helper("typography");

      $config['protocol'] = 'smtp';
      $config['smtp_host'] = 'smtp.googlemail.com';
      $config['smtp_user'] = 'midiacoopergac@gmail.com';
      $config['smtp_pass'] = 'Goias2018';
      $config['smtp_crypto'] = 'ssl';
      $config['smtp_port'] = '465';
      $config['charset'] = 'utf-8';
      $config['mailtype'] = 'html';
      $config['newline'] = "\r\n";

      $this->email->initialize($config);

      $this->email->from("midiacoopergac@gmail.com", "Contato via site");
      $this->email->to("juanoude@gmail.com");
      $this->email->subject($subject);

      $dados = [
        'nome' => $nome,
        'subject' => $subject,
        'email' => $email,
        'telefone' => $telefone,
        'mensagem' => nl2br_except_pre($mensagem)
      ];

      $template = $this->load->view("institucional/email_template", $dados, TRUE);

      $this->email->message($template);

      //$this->email->send(FALSE);
      if($this->email->send()){
        $this->session->set_flashdata("success", "Seu email foi enviado com sucesso");
        redirect("/");
      }else{
      //echo $this->email->print_debugger();
      $this->session->set_flashdata("danger", "Ocorreu um problema ao enviar o email");
      redirect("/");
      }
    }
  }
