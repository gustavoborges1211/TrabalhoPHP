<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Novo Cliente - Sistema de Cadastro de Clientes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastrar Novo Cliente</h1>
        <form action="cadastro_action.php" method="post">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome"><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="telefone">Telefone:</label><br>
            <input type="text" id="telefone" name="telefone"><br>
            <input type="submit" value="Cadastrar">
        </form>
        <a class="button" href="menu.php">Voltar ao Menu</a>
    </div>
</body>
</html>
