<?php $this->load->view("commons/header") ?>


<h1 class="main-title">Novo Post</h1>
<div class="container">
  <?=form_open_multipart('blog/adicionar_post'); ?>

    <div class="form-group">
      <label for="titulo"> Título do Post </label>
      <input type="text" value="<?php echo set_value('titulo'); ?>" class="form-control" name="titulo" id="titulo" placeholder="Insira o titulo de seu post">
      <?php echo form_error('titulo'); ?>
    </div>

    <div class="form-group">
      <label for="foto">Foto do Post</label>
      <input type="file" value="<?php echo set_value('foto'); ?>" name="foto" class="form-control-file" id="foto">
      <small id="fotoHelp" class="form-text text-muted"> A imagem deve ser de extensão jpg e de no máximo 2MB </small>
      <?php echo form_error('foto'); ?>
    </div>

    <div class="form-group">
      <label for="texto">Texto</label>
      <textarea class="form-control" name="texto" id="texto" placeholder="texto" rows="6"> <?php echo set_value('texto'); ?>  </textarea>
      <?php echo form_error('texto'); ?>
    </div>

    <button type="submit" class="btn btn-success btn-right btn-center">Enviar</button>
  <?=form_close();?>
</div>

<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>



<?php $this->load->view("commons/footer") ?>
