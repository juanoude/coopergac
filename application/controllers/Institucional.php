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

    public function contato(){
      $cssespecifico ="institucional.css";

      $dados= [
        'cssespecifico' =>$cssespecifico
      ];

      $this->load->view("institucional/contato", $dados);
    }

    public function email(){
      $this->load->library("email");

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

      $nome = $this->input->post('nome');
      $subject = $this->input->post('titulo');
      $email = $this->input->post('email');
      $mensagem = $this->input->post('mensagem');
      $telefone = $this->input->post('telefone');

      $this->email->from("midiacoopergac@gmail.com", "Contato via site");
      $this->email->to("juanoude@gmail.com");
      $this->email->subject('Msg-Site: '.$subject);

      $dados = [
        'nome' => $nome,
        'subject' => $subject,
        'email' => $email,
        'telefone' => $telefone,
        'mensagem' => $mensagem
      ];

      $template = $this->load->view("institucional/email_template", $dados, TRUE);

      $this->email->message($template);

      $this->email->send(FALSE);
      // if($this->email->send()){
      //   $this->session->set_flashdata("success", "Seu email foi enviado com sucesso");
      //   redirect("/");
      // }else{
      echo $this->email->print_debugger();
      // $this->session->set_flashdata("danger", "Ocorreu um problema ao enviar o email");
      // redirect("/");
      // }
    }
  }
