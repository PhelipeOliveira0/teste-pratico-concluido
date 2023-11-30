<?php

  $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
  $nome = $_POST["nome"];



  $erro = 0;

  if(strlen($nome) == 0){
    $erro = "Seu nome deve ser um texto";
  }

  if(!$email){
    $erro = "E-mail invalido";
  }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Resposta Form</title>
</head>
<body>
  <div class="resposta">
    <a class="link" href="index.php">Voltar</a>
  
  <?php

    if($erro === 0){
      ?>
        <p class="mensagem">Seu nome: <?=$nome?></p>
        <p class="mensagem">Seu email: <?=$email?></p>
      <?php
    }else{
      ?><p class="mensagem"><?= $erro?></p><?php
    }

  ?>
  
</div>
</body>
</html>