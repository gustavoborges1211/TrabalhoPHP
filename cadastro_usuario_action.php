<?php
include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha_hash')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.php"); // Redireciona para a p�gina de login ap�s o cadastro
    exit();
} else {
    echo "Erro ao cadastrar usu�rio: " . $conn->error;
}

$conn->close();
?>
