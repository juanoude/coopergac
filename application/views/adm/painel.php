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
    <table class="table">
      <?php foreach ($lista_midia as $foto): ?>
        <tr>
          <td><?=$foto['nome']?></td>
          <td><?=$foto['data']?></td>
          <td><form action="<?=base_url('multimidia/alterar_foto')?>" method="post"><input type="hidden" id="id" name="id" value="<?=$foto['id']?>" /><button type="submit" class="btn btn-outline-primary">Alterar</button></form></td>
          <td><form action="<?=base_url('multimidia/deletar_foto')?>" method="post"><input type="hidden" id="id" name="id" value="<?=$foto['id']?>" /><button type="submit" class="btn btn-danger">Excluir</button></form></td>
        </tr>
      <?php endforeach; ?>
    </table>
    <a class="btn btn-outline-success" href="<?=base_url('multimidia/nova_midia')?>">Adicionar Foto</a>
  </div>
  <div  class="col-md-6">
    <table class="table">
      <?php foreach ($lista_blog as $post): ?>
        <tr>
          <td><?=$post['titulo']?></td>
          <td><?=character_limiter("{$post['texto']}", 15)?></td>
          <td><form action="<?=base_url('blog/alterar_post')?>" method="post"><input type="hidden" id="id" name="id" value="<?=$post['id']?>" /><button type="submit" class="btn btn-outline-primary">Alterar</button></form></td>
          <td><form action="<?=base_url('blog/deletar_post')?>" method="post"><input type="hidden" name="id" value="<?=$post['id']?>" /><button type="submit" class="btn btn-danger">Excluir</button></form></td>
        </tr>
      <?php endforeach; ?>
    </table>
    <a class="btn btn-outline-success" href="<?=base_url('blog/novo_post')?>">Adicionar Post</a>
  </div>
</div>


<?php $this->load->view("commons/footer") ?>
