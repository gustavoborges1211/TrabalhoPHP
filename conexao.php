<?php
$servername = "localhost";
$username = "id22171539_clientes";
$password = "232712@Gu";
$dbname = "id22171539_clientes";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checa a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>
