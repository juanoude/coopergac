<?php $this->load->view("commons/header") ?>

<?php if(isset($_SESSION['success'])) : ?>
<p class="alert alert-success" role="alert" style="margin-top:10px;">  <?=$this->session->flashdata("success"); ?></p>
<?php endif ?>

<?php if(isset($_SESSION['danger'])) : ?>
<p class="alert alert-danger" role="alert" style="margin-top:10px;">  <?=$this->session->flashdata("danger"); ?></p>
<?php endif ?>

<h1 class="main-title">Imagens</h1>

<?php foreach ($galeria as $foto) : ?>
  <div>
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
