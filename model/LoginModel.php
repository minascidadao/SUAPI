<?php 
require_once("../database/database.php");
if(!isset($_SESSION)) session_start();

class loginModel
{
	public $logIn, $senha;
	
	function __construct()
	{

	}
	
	public function Login($_login, $_senha)
	{
		try
		{
			$query = "CALL spLogin('$_login', '$_senha')";
			$sentenca = DataBase::prepare($query);
			$sentenca->execute();
			$retorno = $sentenca->fetch();
			$_SESSION["login"]= $retorno;
		}
		catch (Exception $ex)
		{print($ex);}
	}	
}


//$action= isset($_GET["action"])  	?$_GET["action"]: NULL;   
//$login = isset($_GET["login"]) 		?$_GET["login"]: NULL; 
//$senha = isset($_GET["senha"]) 		?$_GET["senha"]: NULL; 
//
//
//
//$resultado = $usuario->Login($login, $senha);
//$endereco = $resultado ? "../view/index.php" : "../view/login.php?autenticado=0";
//header("location: $endereco");














?>