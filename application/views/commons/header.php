<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Changa+One|Fredoka+One|Righteous" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('assets/css/geral.css')?>" />
    <link rel="stylesheet" href="<?=base_url("assets/css/{$cssespecifico}")?>" />

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:#F5FFF5">
      <a class="navbar-brand" href="<?=base_url('')?>"><img src="<?=base_url('assets/images/logo-coopergac.png')?>" width="200" height="60" alt="Coopergac" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link mr-2" href="<?=base_url('')?>">Homepage <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-2" href="<?=base_url('sobre')?>">Sobre Nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-2" href="<?=base_url('blog')?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-2" href="<?=base_url('multimidia')?>">Multimídia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-2" href="<?=base_url('contato')?>">Fale Conosco</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </nav>

    <div class="container">
