<?php $this->load->view("commons/header") ?>


  <h1><?=$post['titulo']?></h1>

  <img src="<?=base_url("/assets/blog/{$post['id']}.jpg")?>">

  <div class="texto">
    <?=$post['texto']?>
  </div>



<?php $this->load->view("commons/footer") ?>
