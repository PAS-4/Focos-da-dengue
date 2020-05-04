<?php

include_once("conexao.php");

$buscar_denuncia = "SELECT * FROM denuncia";
$buscando = mysqli_query($link, $buscar_denuncia);

?>