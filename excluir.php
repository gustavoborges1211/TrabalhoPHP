<!DOCTYPE html>
<html>
<head>
    <title>Excluir Cadastro - Sistema de Cadastro de Clientes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<meta charset="utf-8">
<body>
    <div class="container">
        <h1>Excluir Cadastro - Sistema de Cadastro de Clientes</h1>
        <form action="excluir_action.php" method="post">
            <label for="id">ID do Cliente:</label><br>
            <input type="text" id="id" name="id"><br>
            <input type="submit" value="Excluir">
        </form>
        <a class="button" href="menu.php">Voltar ao Menu</a>
    </div>
</body>
</html>
