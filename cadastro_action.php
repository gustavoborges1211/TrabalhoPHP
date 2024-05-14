<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Cliente - Sistema de Cadastro de Clientes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Cliente</h1>
        <?php
        include 'conexao.php';

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $sql = "INSERT INTO cadastro_clientes (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Cliente cadastrado com sucesso!</p>";
        } else {
            echo "<p>Erro ao cadastrar cliente: " . $conn->error . "</p>";
        }

        $conn->close();
        ?>
        <a class="button" href="cadastro.php">Cadastrar Novo Cliente</a>
        <a class="button" href="menu.php">Voltar ao Menu</a>
    </div>
</body>
</html>
