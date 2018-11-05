<?php $this->load->view("commons/header") ?>

<?php if(isset($_SESSION['success'])) : ?>
  <p class="alert alert-success" role="alert" style="margin-top:10px;">  <?=$this->session->flashdata("success"); ?></p>
<?php endif ?>

<?php if(isset($_SESSION['danger'])) : ?>
  <p class="alert alert-danger" role="alert" style="margin-top:10px;">  <?=$this->session->flashdata("danger"); ?></p>
<?php endif ?>

<h1>Painel</h1>

<div class="row">
  <div  class="col-md-6">
    <a class="btn btn-outline-dark" href="<?=base_url('multimidia/nova_midia')?>">Adicionar Foto</a>
  </div>
  <div  class="col-md-6">
    <a class="btn btn-outline-dark" href="<?=base_url('blog/novo_post')?>">Adicionar Post</a>
  </div>
</div>


<?php $this->load->view("commons/footer") ?>
