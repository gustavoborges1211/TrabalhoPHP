<?php
include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha_hash')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.php"); // Redireciona para a página de login após o cadastro
    exit();
} else {
    echo "Erro ao cadastrar usuário: " . $conn->error;
}

$conn->close();
?>
