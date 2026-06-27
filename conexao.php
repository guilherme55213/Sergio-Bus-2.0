<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "sergiobus"
);

if($conn->connect_error){
    die("Erro na conexão");
}

?>