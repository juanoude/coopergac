<?php $this->load->view("commons/header") ?>


<h1 class="main-title">Adicionar imagem</h1>
<div class="container">
  <?=form_open_multipart('multimidia/adicionar_foto'); ?>

    <div class="form-group">
      <label for="nome"> Nome da Foto</label>
      <input type="text" name="nome" class="form-control" id="nome" value="<?php echo set_value('nome'); ?>" placeholder="Insira o nome da foto">
      <?php echo form_error('nome'); ?>
    </div>

    <div class="form-group">
      <label for="foto">Escolha a imagem</label>
      <input type="file" value="<?php echo set_value('foto'); ?>" name="foto" class="form-control-file" id="foto">
      <small id="fotoHelp" class="form-text text-muted">A imagem deve ser de extensão jpg e de no máximo 2MB</small>
      <?php echo form_error('foto'); ?>
    </div>

    <div class="form-group">
      <label for="descricao">Descrição</label>
      <textarea class="form-control" name="descricao" id="descricao" placeholder="Digite a mensagem aqui" rows="6"> <?php echo set_value('descricao'); ?> </textarea>
      <?php echo form_error('descricao'); ?>
    </div>

    <div class="form-group">
      <label for="data">Insira a data da foto</label>
      <input type="date" name="data" value="<?php echo set_value('data'); ?>" class="form-control" id="data">
      <small id="dateHelp" class="form-text text-muted">A data deve estar no fomato dd/mm/aaaa com zeros a esquerda.
        Ex:01/09/2001</small>
      <?php echo form_error('data'); ?>
    </div>


    <button type="submit" class="btn btn-success btn-right btn-center">Enviar</button>
  <?=form_close();?>


</div>

<h1 class="main-title">Adicionar video</h1>


<?php $this->load->view("commons/footer") ?>
