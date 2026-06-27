<?php
session_start();

if(isset($_POST['entrar'])){

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if($usuario == "admin" && $senha == "123456"){

        $_SESSION['logado'] = true;

        header("Location: painel.php");
        exit();

    }else{
        $erro = "Usuário ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Admin</title>
</head>

<body>

<h2>Login Administrativo</h2>

<form method="POST">

    <input type="text" name="usuario" placeholder="Usuário" required>

    <br><br>

    <input type="password" name="senha" placeholder="Senha" required>

    <br><br>

    <button type="submit" name="entrar">
        Entrar
    </button>

</form>

<?php
if(isset($erro)){
    echo $erro;
}
?>

</body>
</html>