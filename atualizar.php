<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Atualizar Cadastro - Sistema de Cadastro de Clientes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Atualizar Cadastro - Sistema de Cadastro de Clientes</h1>
        <form action="atualizar_action.php" method="post">
            <label for="id">ID do Cliente:</label><br>
            <input type="text" id="id" name="id"><br>
            <label for="nome">Novo Nome:</label><br>
            <input type="text" id="nome" name="nome"><br>
            <label for="email">Novo Email:</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="telefone">Novo Telefone:</label><br>
            <input type="text" id="telefone" name="telefone"><br>
            <input type="submit" value="Atualizar">
        </form>
        <a class="button" href="menu.php">Voltar ao Menu</a>
    </div>
</body>
</html>
