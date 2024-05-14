<!DOCTYPE html>
<html>
<head>
    <title>Consultar Clientes Cadastrados - Sistema de Cadastro de Clientes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Consultar Clientes Cadastrados</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
            <?php
            include 'conexao.php';

            $sql = "SELECT * FROM cadastro_clientes";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['telefone']."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhum cliente cadastrado.</td></tr>";
            }
            $conn->close();
            ?>
        </table>
        <br>
        <a class="button" href="menu.php">Voltar ao Menu</a>
    </div>
</body>
</html>
