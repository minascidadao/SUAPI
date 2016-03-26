<?php
require_once("../model/loginModel.php");

$login = new loginModel();
$login->logIn = isset($_GET["login"]) ? $_GET["login"]: NULL;
$login->senha = isset($_GET["senha"]) ? $_GET["senha"]: NULL;

$login->Login($login->logIn, $login->senha);
print_r($_SESSION["login"]);

$endereco = isset($resultado) ? "../view/index.php" : "../view/index.php?page=login&autenticado=false";
print($endereco);
//header("location: $endereco");

		
?>