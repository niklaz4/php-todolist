<?php
// variáveis banco de dados
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "todo_list";

// Criar conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// conferir conexão
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
