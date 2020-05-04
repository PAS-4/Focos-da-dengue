<?php

session_start();
include_once("conexao.php");

$rua = filter_input(INPUT_POST, 'tRua', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'tBairro', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'tCidade', FILTER_SANITIZE_STRING);
$foto = filter_input(INPUT_POST, 'tFoto', FILTER_SANITIZE_STRING);
$coment = filter_input(INPUT_POST, 'tMsg', FILTER_SANITIZE_STRING);

$inserir_denuncia = "INSERT INTO denuncia (rua, bairro, cidade, foto, comentario) VALUES ('$rua', '$bairro', '$cidade', '$foto', '$coment')";
$inserindo_denuncia = mysqli_query($link, $inserir_denuncia);

if(!$link){
    header("Location: ../home.php#bg");
} else {
    header("Location: ../lista_denuncia.php");
}

?>