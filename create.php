<?php
require_once 'conexao.php';


    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $dataLanc = $_POST["dataLanc"];
    $telAutor = $_POST["telAutor"];

    
    $sqlAutor = "INSERT INTO autores (nome, telefone) VALUES ('$autor', '$telAutor')";
if ($conn->query($sqlAutor) === TRUE) {
    // Se a inserção do autor foi bem-sucedida, o ID do autor gerado automaticamente estará disponível pois como a chave estrangeira precisa acompanhar o tabela principal, sem isso daria erros
    $autor_id = $conn->insert_id;

    // Inserir o livro na tabela 'livros', utilizando o ID do autor como chave estrangeira
    $sqlLivro = "INSERT INTO livros (nome, data_lancamento, autor_id) VALUES ('$titulo', '$dataLanc', '$autor_id')";
    if ($conn->query($sqlLivro) === TRUE) {
        echo "Livro e autor inseridos com sucesso.";
    } else {
        echo "Erro ao inserir livro: " . $conn->error;
    }
} else {
    echo "Erro ao inserir autor: " . $conn->error;
}
 

//identificar erros que o SQL possa apresentar
try {
    $res = $conn->query($sqlLivro);
} catch (\Throwable $th) {
    echo $th;
}


?>

