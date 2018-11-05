<?php $this->load->view("commons/header");
if(isset($_SESSION['danger'])) :?>
  <p class="alert alert-danger"><?=$this->session->flashdata('danger')?>  </p>
<?php endif; ?>


<h1> Login</h1>
<hr>
<div class="row">
  <div class="col-12">
    <div class="container">
      <?=form_open('adm/login'); ?>

        <div class="form-group">
          <label for="usuario"> Usuario </label>
          <input type="text" class="form-control" value="<?php echo set_value('nome'); ?>" id="usuario" name="usuario" placeholder="Insira seu nome de usuário">
          <?php echo form_error('usuario'); ?>
        </div>

        <div class="form-group">
          <label for="senha"> Senha </label>
          <input type="password" class="form-control" value="<?php echo set_value('senha'); ?>" name="senha" id="senha" placeholder="Insira sua senha">
          <?php echo form_error('senha'); ?>
        </div>

        <button type="submit" class="btn btn-success btn-right btn-center">Enviar</button>
      <?=form_close();?>
    </div>
  </div>
</div>

<?php $this->load->view("commons/footer"); ?>
