<?php
  $titulo = set_value('titulo') == FALSE ? $titulo_banco : set_value('titulo');

  $texto = set_value('texto') == FALSE ? $texto_banco : set_value('texto');
?>


<div class="form-group">
  <label for="titulo"> Título do Post </label>
  <input type="text" value="<?= $titulo ?>" class="form-control" name="titulo" id="titulo" placeholder="Insira o titulo de seu post">
  <?php echo form_error('titulo'); ?>
</div>

<div class="form-group">
  <label for="foto">Foto do Post</label>
  <input type="file" name="foto" class="form-control-file" id="foto">
  <small id="fotoHelp" class="form-text text-muted"> A imagem deve ser de extensão jpg e de no máximo 2MB </small>
  <?php echo form_error('foto'); ?>
</div>

<div class="form-group">
  <label for="texto">Texto</label>
  <textarea class="form-control" name="texto" id="texto" placeholder="texto" rows="6"> <?=$texto?>  </textarea>
  <?php echo form_error('texto'); ?>
</div>

<input type="hidden" name="id" value="<?=$id?>">

<button type="submit" class="btn btn-success btn-right btn-center">Enviar</button>
