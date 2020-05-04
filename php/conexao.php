<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dengue";

$link = mysqli_connect($host, $user, $pass) or die ('Não foi possível conectar');
mysqli_select_db($link, $db);

?>