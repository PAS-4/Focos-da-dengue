<?php

session_start();

include_once("conexao.php");

if(empty($_POST['logUsuario']) || empty($_POST['logSenha'])){
    header("Location: ../login.php");
    exit();
}

$log_usuario = mysqli_real_escape_string($link, $_POST['logUsuario']);
$log_senha = mysqli_real_escape_string($link, $_POST['logSenha']);

$buscar_usuario_senha = "SELECT usuario, senha FROM usuario WHERE usuario = '{$log_usuario}' && senha = '{$log_senha}'";

//VALIDANDO USUÁRIO E SENHA

$validando = mysqli_query($link, $buscar_usuario_senha);

$sessao_valida = mysqli_num_rows($validando);

// VALIDANDO A SESSÃO DO USUÁRIO EM ESPECÍFICO

if($sessao_valida == 1){
    $_SESSION['usuario'] = $log_usuario;
    header("Location: ../home.php");
} else {
    $_SESSION['invalido'] = true;
    header("Location: ../login.php");
}
?>