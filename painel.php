<?php
// exemplo de conexão (mantém o teu)
include("conexao.php");

$sql = "SELECT * FROM mensagens ORDER BY id DESC";
$resultado = $conn->query($sql);

$total = $resultado->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Painel Admin</title>
<link rel="stylesheet" href="painel.css">
</head>

<body>

<div class="topo">
    <h1>Painel Sergio Bus</h1>
    <a href="logout.php" class="sair">Sair</a>
</div>

<div class="container">

    <!-- CARDS -->
    <div class="cards">

        <div class="card">
            <h2><?= $total ?></h2>
            <p>Mensagens</p>
        </div>

        <div class="card">
            <h2><?= $total ?></h2>
            <p>Contatos</p>
        </div>

        <div class="card">
            <h2><?= $total ?></h2>
            <p>E-mails</p>
        </div>

        <div class="card">
            <h2>Hoje</h2>
            <p>Última atualização</p>
        </div>

    </div>

    <!-- TABELA -->
    <div class="card tabela-card">

        <h3>Mensagens recebidas</h3>

        <table>

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Mensagem</th>
            </tr>

            <?php while($row = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nome'] ?></td>
                <td><?= $row['telefone'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['mensagem'] ?></td>
            </tr>
            <?php endwhile; ?>

        </table>

    </div>

</div>

</body>
</html>