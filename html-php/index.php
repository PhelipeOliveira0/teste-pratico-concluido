<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste prático HTML e PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <form action="processa_formulario.php" method="post" class="formulario">
    
    <label for="nome" class="formulario__itens">Nome:</label>
    <input type="text" name="nome" id="nome" class="formulario__itens formulario__itens__input" placeholder="Seu nome">
    <label for="email" class="formulario__itens">Email:</label>
    <input type="email" name="email" id="email" class="formulario__itens formulario__itens__input" placeholder="seuemail@email.com">
    <input type="submit" value="Enviar" class="formulario__itens">

  </form>



  
</body>
</html>