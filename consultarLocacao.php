<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Portal da Biblioteca</h1>
  </div>
    <form action="seu_arquivo_php.php" method="post">

         <div class="form-group">
            <label for="locado">Locado:</label>
            <select class="form-control" id="locado" name="locado">
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select>
        </div>
        <div class="form-group">
            <label for="dataLocacao">Data da Locação:</label>
            <input type="date" class="form-control" id="dataLocacao" name="dataLocacao">
        </div>
        <div class="form-group">
            <label for="dataPrevista">Data Prevista de Devolução:</label>
            <input type="date" class="form-control" id="dataPrevista" name="dataPrevista">
        </div>
        <button type="submit" class="btn btn-primary">Concluído</button>
    </form>
        <?php
    // Conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Pegar os dados do POST
    $idLivro = $_POST["idLivro"];
    $locado = $_POST["locado"];
    $dataLocacao = $_POST["dataLocacao"];
    $dataPrevista = $_POST["dataPrevista"];

    // Consulta SQL para inserir os dados na tabela de locações
    $sql = "INSERT INTO locacoes (idLivro, locado, dataLocacao, dataPrevista) VALUES ('$livro_id','$data_locacao', '$data_prevista')";

    // Executar a consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Registro inserido com sucesso na tabela de locações";
    } else {
        echo "Erro ao inserir o registro na tabela de locações: " . $conn->error;
    }
    ?>
</body>
</html>