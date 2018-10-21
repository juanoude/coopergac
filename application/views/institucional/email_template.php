<html>
 <head>
   <meta charset="utf-8">
 </head>
 <body>
   <h1>Mensagem de contato do site:</h1>
   <h2>Titulo: <?= $subject ?></h2>
   <ul>
     <li>Nome: <?= $nome ?></li>
     <li>Telefone: <?= $telefone ?></li>
     <li>Email: <?= $email ?></li>
   </ul>
   <p>
     <?= $mensagem ?>
   </p>
 </body>
</html>
