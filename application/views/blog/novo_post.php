<?php $this->load->view("commons/header");?>


<h1 class="main-title">Novo Post</h1>
<div class="container">
  <?=form_open_multipart('blog/adicionar_post'); ?>
  <?php
    $dados = [
      'id' => "",
      'titulo_banco' => "",
      'texto_banco' => ""
    ];
    $this->load->view("blog/post_form_template", $dados);
  ?>

  <?=form_close();?>
</div>

<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>



<?php $this->load->view("commons/footer") ?>
