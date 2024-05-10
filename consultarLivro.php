<?php
require_once 'conexao.php';

// Consulta para obter todos os livros
$sql = "SELECT id, nome, data_lancamento FROM livros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>Título</th><th>Data de Lançamento</th><th>Ações</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["nome"] . '</td>';
        echo '<td>' . $row["data_lancamento"] . '</td>';
        echo '<td>';
        echo '<a href="editar.php?id=' . $row["id"] . '">Editar</a>';
        echo ' | ';
        echo '<a href="excluir.php?id=' . $row["id"] . '">Excluir</a>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Nenhum livro encontrado.";
}

$conn->close();
?>
