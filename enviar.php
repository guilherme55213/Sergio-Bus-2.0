<?php

include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO mensagens
    (nome,email,telefone,mensagem)
    VALUES
    ('$nome','$email','$telefone','$mensagem')";

    if($conn->query($sql)){
        echo "
        <script>
            alert('Mensagem enviada com sucesso!');
            window.location='contato.html';
        </script>
        ";
    }else{
        echo "Erro: " . $conn->error;
    }

} else {

    header("Location: contato.html");
    exit();

}
?>