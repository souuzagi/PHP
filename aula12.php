<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <style>
  div{
    text-align: center;
    position: relative;
    height: 200px;
    bottom: -60px;
    font-size: 200%;
    color: rgb(255, 170, 204);
   
}
body{
    background-color: rgba(254, 5, 92, 0.54);
}
h1{
    text-align: center;
    color: rgb(255, 255, 255);
}
form{
    text-align: center;
    color: rgb(255, 255, 255);
}
</style>

  <body>
    <h1>Formulário de Autenticação</h1>
    <form action="processa.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br><br>
        <input type="submit" value="Enviar">
     <p>
      Esqueceu sua senha?
      <a href="">Clique aqui!</a>
     </p>
    
  </body>
</html>