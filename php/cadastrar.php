<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'tNome', FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST, 'tUsuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'tSenha', FILTER_SANITIZE_STRING);

$inserir_usuario = "INSERT INTO usuario (nome, usuario, senha) VALUES ('$nome', '$usuario', '$senha')";
$inserindo_usuario = mysqli_query($link, $inserir_usuario);

if(!$inserindo_usuario){
    header("Location: ../cadastro.php");
} else {
    header("Location: ../home.php");
}

?>