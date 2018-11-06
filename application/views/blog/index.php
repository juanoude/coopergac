<?php $this->load->view("commons/header") ?>

<?php if(isset($_SESSION['success'])) : ?>
<p class="alert alert-success" role="alert" style="margin-top:10px;">  <?=$this->session->flashdata("success"); ?></p>
<?php endif ?>

<?php if(isset($_SESSION['danger'])) : ?>
<p class="alert alert-danger" role="alert" style="margin-top:10px;">  <?=$this->session->flashdata("danger"); ?></p>
<?php endif ?>

<div class="row">
  <!-- Carrousel -->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <!-- Bullets -->
    <!-- <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol> -->
    <!-- Slides -->

    <div class="carousel-inner">
      <?php $i = 0; ?>
      <?php foreach($capas as $capa) :?>
        <div class="carousel-item <?php if($i==0){echo "active";}?>">
          <img class="d-block w-100" src='<?=base_url("assets/blog/{$capa['id']}.jpg")?>' alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5><?=$capa['titulo']?></h5>
            <p><?=character_limiter($capa['texto'], 120)?>...</p>
          </div>
        </div>
        <?php $i++; ?>
      <?php endforeach; ?>
    </div>

    <!-- Setas -->
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
</div>

<div class="row">

  <?php foreach ($posts as $post) : ?>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="<?=base_url("assets/blog/{$post['id']}.jpg")?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?=$post['titulo']?></h5>
        <p class="card-text"><?=character_limiter($post['texto'], 80)?></p>
        <a href="<?=base_url("blog/single/{$post['id']}")?>" class="btn btn-outline-dark">Ler mais...</a>
      </div>
    </div>
  <?php endforeach; ?>

</div>



<?php $this->load->view("commons/footer") ?>
