<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clientes";

// Cria a conex�o
$conn = new mysqli($servername, $username, $password, $dbname);

// Checa a conex�o
if ($conn->connect_error) {
    die("Conex�o falhou: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>
