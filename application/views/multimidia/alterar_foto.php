<?php $this->load->view("commons/header") ?>


<h1 class="main-title">Adicionar imagem</h1>
<div class="container">
  <?=form_open_multipart('multimidia/atualizar'); ?>
  <?php
    $dados = [
      'id' => $midia['id'],
      'nome_banco' => $midia['nome'],
      'descricao_banco' => $midia['descricao'],
      'data_banco' => $midia['data']
    ];

    $this->load->view("multimidia/midia_form_template", $dados);
  ?>

  <?=form_close();?>


</div>

<h1 class="main-title">Adicionar video</h1>


<?php $this->load->view("commons/footer") ?>
