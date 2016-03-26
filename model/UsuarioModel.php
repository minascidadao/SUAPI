<?php
require_once("../database/database.php");
require_once("NivelAcesso.php");
require_once("object/Usuario.php");

if(!isset($_SESSION)) session_start();

class UsuarioModel extends usuario
{
	public function Manipular($comando, $usuario, $login, $senha, $email, $ativo, $dataCadastro, $administrador=false, $backOffice=false)
	{
					
			
	}








}
?>