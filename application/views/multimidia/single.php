<?php $this->load->view("commons/header") ?>

<ul>
  <li><img src="<?=base_url("/assets/multimidia/{$foto['id']}.jpg")?>"></li>
  <li><?=$foto['nome']?></li>
  <li><?=$foto['descricao']?></li>
  <li><?=dataBr($foto['data'])?></li>
</ul>

<?php $this->load->view("commons/footer") ?>
