<!DOCTYPE html>
<html>
<head>
    <title>Login - Sistema de Cadastro de Clientes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login - Sistema de Cadastro de Clientes</h1>
        <form action="login_action.php" method="post">
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha"><br>
            <input type="submit" value="Login">
        </form>
        <p>Não tem uma conta? <a href="cadastro_usuario.php">Cadastre-se aqui</a>.</p>
    </div>
</body>
</html>
