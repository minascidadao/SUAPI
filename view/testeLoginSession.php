<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>
<?php
	require_once("../model/usuarioModel.php");
	$usuario = new UsuarioModel();
	
	$_SESSION["login"] = $usuario->Login("1","1");
	if (isset($_SESSION["login"])) echo 'sim'; else echo 'nao';
	print_r( $_SESSION["login"]);
	
	


?>


<body>
</body>
</html>