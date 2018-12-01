
<?php $this->load->view("commons/header") ?>
  <!-- FEEDBACK PARA O USUÁRIO -->
<?php if(isset($_SESSION['success'])) : ?>
<p class="alert alert-success" role="alert" style="margin-top:10px;">  <?=$this->session->flashdata("success"); ?></p>
<?php endif ?>

<?php if(isset($_SESSION['danger'])) : ?>
<p class="alert alert-danger" role="alert" style="margin-top:10px;">  <?=$this->session->flashdata("danger"); ?></p>
<?php endif ?>

<!-- HERO BANNER PRINCIPAL -->
<div  class="row">
  <div class="col-md-12 hero-capa">
    <!-- <img src="<= ?base_url('assets/images/carvao.jpg')?>" class="hero-img" alt="carvão vegetal"/> -->

    <div class="hero-content">
      <h1 class="d-none d-lg-block display-1 hero-title">COOPERGAC</h1>
      <h1 class="d-none d-md-block d-lg-none display-3 hero-title">COOPERGAC</h1>
      <h1 class="d-none d-sm-block d-md-none display-4 hero-title">COOPERGAC</h1>
      <h1 class="d-xm-block d-sm-none hero-title" style="top:10%; left:15%">COOPERGAC</h1>

      <h5 class="hero-sub d-none d-md-block">Cooperativa dos Garimpeiros e Garimpeiras de Cavalcante, Teresina e Monte Alegre de Goiás</h5>
      <h6 class="hero-sub d-sm-block d-md-none" style="left:7%; margin-right:5px; margin-top:5px;">Cooperativa dos Garimpeiros e Garimpeiras de Cavalcante, Teresina e Monte Alegre de Goiás</h6>

      <a href="<?= base_url('contato')?>" class="hero-btn btn btn-dark btn-lg">Fale Conosco</a>
    </div>
  </div>
</div>

<!-- OS TRÊS PILARES -->
<section class="pilares">
<div class="row">
  <div class="col-md-4">
    <i class="fas fa-book" style="font-size:40px"></i>
    <h4>Educação</h4>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu nisl augue. Proin egestas odio ac tempor vulputate. Nulla vestibulum imperdiet pretium. Sed pellentesque aliquam congue.
    </p>
  </div>
  <div class="col-md-4">
    <i class="fas fa-tree" style="font-size:40px"></i>
    <h4>Sustentabilidade</h4>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu nisl augue. Proin egestas odio ac tempor vulputate. Nulla vestibulum imperdiet pretium. Sed pellentesque aliquam congue.
    </p>
  </div>
  <div class="col-md-4">
    <i class="fas fa-hands-helping" style="font-size:40px"></i>
    <h4>Respeito</h4>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu nisl augue. Proin egestas odio ac tempor vulputate. Nulla vestibulum imperdiet pretium. Sed pellentesque aliquam congue.
    </p>
  </div>
</div>
<div class="row">
  <div class="col">
    <a href="<?= base_url('sobre')?>" class="pilares-btn btn btn-secondary btn-lg"> Saiba Mais</a>
  </div>
</div>
</section>

<section class="row">
  <!-- Notícias -->
  <div class="col-md-12 capas-wrapper">
    <?php foreach($capas as $capa) :?>
      <a href='<?=base_url("blog/single/{$capa['id']}")?>'>
        <article class="capa col-md-6">
          <img class="capa-img img-fluid" src='<?=base_url("assets/blog/{$capa['id']}.jpg")?>' alt="<?=$capa['titulo']?>">
          <div class="capa-conteudo">
            <h5 class="capa-titulo"><?=$capa['titulo']?></h5>
            <p class="capa-texto lead"><?=character_limiter(strip_tags($capa['texto']), 120)?>...</p>
          </div>
        </article>
      </a>
    <?php endforeach; ?>
  </div>
</section>


<?php $this->load->view("commons/footer") ?>
