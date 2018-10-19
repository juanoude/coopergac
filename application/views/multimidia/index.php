<?php $this->load->view("commons/header") ?>

<?php if(isset($_SESSION['success'])) : ?>
<p class="alert alert-success" role="alert" style="margin-top:10px;">  <?=$this->session->flashdata("success"); ?></p>
<?php endif ?>

<?php if(isset($_SESSION['danger'])) : ?>
<p class="alert alert-danger" role="alert" style="margin-top:10px;">  <?=$this->session->flashdata("danger"); ?></p>
<?php endif ?>

<h1 class="main-title">Galeria de Imagens</h1>



<h1 class="main-title">Videos</h1>

<?php $this->load->view("commons/footer") ?>
