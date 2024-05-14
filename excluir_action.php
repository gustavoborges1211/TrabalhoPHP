<!DOCTYPE html>
<html>
<head>
    <title>Excluir Cliente - Sistema de Cadastro de Clientes</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Excluir Cliente</h1>
        <?php
        include 'conexao.php';

        $id = $_POST['id'];

        $sql = "DELETE FROM cadastro_clientes WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Cliente excluído com sucesso!</p>";
        } else {
            echo "<p>Erro ao excluir cliente: " . $conn->error . "</p>";
        }

        $conn->close();
        ?>
        <a class="button" href="excluir.php">Excluir Outro Cliente</a>
        <a class="button" href="menu.php">Voltar ao Menu</a>
    </div>
</body>
</html>
