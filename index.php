
<?php
require_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Bem vindo ao portal da biblioteca</h1>
  <p>Como podemos te ajudar hoje?</p>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <button type="button" a target="./cadastroLivro.php" class="btn btn-primary btn-lg" >Cadastrar livros</button>
        </div>
    <div class="col-sm-4">
      <button type="button" ahref="./consultarLivro.php" class="btn btn-primary btn-lg">Consultar livros</button></div>
    <div class="col-sm-4">
      <button type="button" ahref="./consultarLocacao.php" class="btn btn-primary btn-lg">Consultar Locações</button> </div>
  </div>
</div>



</body>
</html>