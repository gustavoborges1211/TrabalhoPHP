<?php
session_start();
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($senha, $row['senha'])) {
        $_SESSION['usuario_id'] = $row['id'];
        $_SESSION['usuario_nome'] = $row['nome'];
        header("Location: menu.php"); // Redireciona para o menu principal ap�s o login
        exit();
    } else {
        echo "Senha incorreta. <a href='login.php'>Tente novamente</a>";
    }
} else {
    echo "Usu�rio n�o encontrado. <a href='cadastro_usuario.php'>Cadastre-se aqui</a>.";
}

$conn->close();
?>
