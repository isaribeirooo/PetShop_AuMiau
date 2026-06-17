<?php

$conexao = mysqli_connect(
    "localhost",
    "root",
    "",
    "petshop"
);

if (!$conexao) {
    die("Erro ao conectar");
}

echo "Conectado com sucesso!";

?>