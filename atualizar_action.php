<!DOCTYPE html>
<html>
<head>
    <title>Atualizar Cliente - Sistema de Cadastro de Clientes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Atualizar Cliente</h1>
        <?php
        include 'conexao.php';

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $sql = "UPDATE cadastro_clientes SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Cliente atualizado com sucesso!</p>";
        } else {
            echo "<p>Erro ao atualizar cliente: " . $conn->error . "</p>";
        }

        $conn->close();
        ?>
        <a class="button" href="atualizar.php">Atualizar Outro Cliente</a>
        <a class="button" href="menu.php">Voltar ao Menu</a>
    </div>
</body>
</html>
