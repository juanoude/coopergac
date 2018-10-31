<?php $this->load->view("commons/header") ?>


<h1 class="main-title">Adicionar imagem</h1>
<div class="container">
  <?=form_open_multipart('multimidia/adicionar_foto'); ?>

    <div class="form-group">
      <label for="nome"> Nome da Foto</label>
      <input type="text" name="nome" class="form-control" id="nome" placeholder="Insira o nome da foto">
    </div>

    <div class="form-group">
      <label for="foto">Escolha a imagem</label>
      <input type="file" name="foto" class="form-control-file" id="foto">
      <small id="fotoHelp" class="form-text text-muted">A imagem deve ser de extensão jpg e de no máximo 2MB</small>
    </div>

    <div class="form-group">
      <label for="descricao">Descrição</label>
      <textarea class="form-control" name="descricao" id="descricao" placeholder="Digite a mensagem aqui" rows="6"> </textarea>
    </div>

    <div class="form-group">
      <label for="data">Insira a data da foto</label>
      <input type="date" name="data" class="form-control" id="data">
      <small id="dateHelp" class="form-text text-muted">A data deve estar no fomato dd/mm/aaaa com zeros a esquerda.
        Ex:01/09/2001</small>
    </div>


    <button type="submit" class="btn btn-success btn-right btn-center">Enviar</button>
  <?=form_close();?>


</div>

<h1 class="main-title">Adicionar video</h1>


<?php $this->load->view("commons/footer") ?>
