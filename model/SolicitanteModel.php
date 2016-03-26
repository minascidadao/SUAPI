<?php
require_once("../database/database.php");

class solicitanteModel
{
	public function Listar()
	{
		$dataBase = new DataBase();
		return $dataBase->Listar('solicitantes', 'solicitante');
	}

	public function Manipular( $_comando, $_solicitanteID, $_solicitante, $_rg )
	{
		try
		{

		}
		catch(Exception $ex)
		{
			print("Erro modelo/solicitante.php: ". $ex);
		}
	}


}
?>