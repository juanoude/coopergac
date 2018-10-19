<?php $this->load->view("commons/header"); ?>
<div class="row">
  <div class="col-12">
    <h1 class="titulo d-none d-md-block">CONTATO</h1>
    <h1 class="titulo d-sm-block d-md-none" style="font-size:3rem">CONTATO</h1>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="container">
      <?=form_open('institucional/email'); ?>

        <div class="form-group">
          <label for="nome"> Nome Completo</label>
          <input type="text" class="form-control" id="nome" placeholder="Insira seu nome">
        </div>

        <div class="form-group">
          <label for="email"> Endereço de Email</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Insira seu email">
          <small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos seu email</small>
        </div>

        <div class="form-group">
          <label for="telefone"> Telefone </label>
          <input type="text" class="form-control" id="telefone" placeholder="Insira seu número de telefone">
        </div>

        <div class="form-group">
          <label for="titulo"> Título da Mensagem</label>
          <input type="text" class="form-control" id="titulo" placeholder="Insira o título ou assunto da mensagem">
        </div>

        <div class="form-group">
          <label for="mensagem"> Mensagem</label>
          <textarea class="form-control" id="mensagem" placeholder="Digite a mensagem aqui" rows="6"></textarea>
        </div>

        <button type="submit" class="btn btn-success btn-right btn-center">Enviar</button>
      <?=form_close();?>
    </div>
  </div>
</div>

<?php $this->load->view("commons/footer"); ?>
