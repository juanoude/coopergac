<?php $this->load->view("commons/header") ?>

<?php if(isset($_SESSION['success'])) : ?>
<p class="alert alert-success" role="alert" style="margin-top:10px;">  <?=$this->session->flashdata("success"); ?></p>
<?php endif ?>

<?php if(isset($_SESSION['danger'])) : ?>
<p class="alert alert-danger" role="alert" style="margin-top:10px;">  <?=$this->session->flashdata("danger"); ?></p>
<?php endif ?>

<h1 class="main-title">Imagens</h1>

<div class="row">
  <!-- Carrousel -->
  <div class="mx-auto">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <!-- Bullets -->
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <!-- Slides -->
      <div class="carousel-inner">
        <?php $i = 0;?>
        <?php foreach($capas as $capa) :?>
          <div class="carousel-item <?php if($i==0){echo "active";}?>"> <!--active no primeiro-->
            <a href='<?=base_url("/multimidia/single/{$capa['id']}")?>'>
              <img class="d-block w-100" src='<?=base_url("assets/multimidia/{$capa['id']}.jpg")?>' alt="Slide">
              <div class="carousel-caption d-none d-md-block">
                <h5><?=$capa['nome']?></h5>
                <p><?=character_limiter($capa['descricao'], 120)?>...</p>
              </div>
            </a>
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
</div>

<?php foreach ($galeria as $foto) : ?>
  <div class="d-inline">
    <a href='<?=base_url("multimidia/single/{$foto['id']}")?>'>
      <img height="150" width="280" src="<?=base_url("/assets/multimidia/{$foto['id']}.jpg")?>">
    </a>
  </div>
<?php endforeach ?>



<?php
  $API_key = 'AIzaSyBmkNiFC1hoYli4YqevnQYz-h4xCtK0Xcc';
  $channelId = 'UCGjQQLkChBki3pMsWwZLXFQ';
  $maxResults = 10;

  $videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelId.'&maxResults='.$maxResults.'&key='.$API_key.''));
?>

<h1 class="main-title">Videos</h1>

<?php
  foreach ($videoList->items as $item) {
    if(isset($item->id->videoId)){ ?>
      <div class="youtube-video">
        <iframe width="280" height="150" src="https://www.youtube.com/embed/<?=$item->id->videoId?>" frameborder="0" allowfullscreen></iframe>
      </div>
<?php
    }
  } ?>



<?php $this->load->view("commons/footer") ?>
