<!-- Arquivo para conectar no banco de dados -->
<?php

$localhost = "localhost";// local onde o banco de dados se encontra
$user = "root";          //usuario no banco de dados       
$password = "root";       // senha de acesso ao banco de dados
$db = "biblioteca";       // banco de dados a ser usado

$conn = new mysqli($localhost,$user,$password,$db); 

if($conn->connect_errno){
echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
} //identificar o erro que está sendo causado caso a conexão no banco não funcione
?>
