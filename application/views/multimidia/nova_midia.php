<?php $this->load->view("commons/header") ?>


<h1 class="main-title">Adicionar imagem</h1>
<div class="container">
  <?=form_open_multipart('multimidia/adicionar_foto'); ?>
  <?php
    $dados = [
      'id' => "",
      'nome_banco' => "",
      'descricao_banco' => "",
      'data_banco' => ""
    ];

    $this->load->view("multimidia/midia_form_template", $dados);
  ?>



  <?=form_close();?>


</div>

<h1 class="main-title">Adicionar video</h1>


<?php $this->load->view("commons/footer") ?>
