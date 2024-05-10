<?php
require_once 'conexao.php'; //buscando os dados da conexão com o banco
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrando um novo livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
</BODY>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Portal da Biblioteca</h1>
  </div>
    <!-- formulário para preencher o cadastro do livro -->
    <form action="create.php" method="POST">
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" class="form-control" id="autor" name="autor">
        </div>
        <div class="form-group">
            <label for="dataLanc">Data de Lançamento:</label>
            <input type="date" class="form-control" id="dataLanc" name="dataLanc">
        </div>
        <div class="form-group">
            <label for="telAutor">Telefone do Autor:</label>
            <input type="tel" class="form-control" id="telAutor" name="telAutor">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</form>

</body>
</html>

