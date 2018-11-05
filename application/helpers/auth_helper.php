<?php
  function autorizar(){
    $ci = get_instance();
    $logado = $ci->session->userdata("logado");
    if(!$logado){
      $ci->session->set_flashdata("danger", "você precisa estar logado");
      redirect("/adm");
    }
  }
