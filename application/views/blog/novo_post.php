<?php $this->load->view("commons/header") ?>


<h1 class="main-title">Novo Post</h1>
<div class="container">
  <?=form_open_multipart('blog/novo'); ?>

    <div class="form-group">
      <label for="titulo"> Título do Post </label>
      <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Insira o titulo de seu post">
    </div>

    <div class="form-group">
      <label for="foto">Foto do Post</label>
      <input type="file" name="foto" class="form-control-file" id="foto">
      <small id="fotoHelp" class="form-text text-muted"> A imagem deve ser de extensão jpg e de no máximo 2MB </small>
    </div>

    <div class="form-group">
      <label for="texto">Texto</label>
      <textarea class="form-control" name="texto" id="texto" placeholder="texto" rows="6"> </textarea>
    </div>

    <button type="submit" class="btn btn-success btn-right btn-center">Enviar</button>
  <?=form_close();?>
</div>



<?php $this->load->view("commons/footer") ?>
