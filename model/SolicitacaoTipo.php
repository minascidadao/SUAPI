<?php
require_once("../database/database.php");
class SolicitacaoTipo
{	
	public function Listar()
	{
		$dataBase = new DataBase();
		return $dataBase->Listar("solicitacoesTipos","solicitacaoTipo");	
	}
	
	
}



?>