<?php
require_once("../database/Database.php");
class UnidadePrisionalModel
{
	public function Listar()
	{
		try
		{
			$database = new DataBase();
			return $database->Listar("unidadesPrisionais","unidadePrisional");
		}
		catch (Exception $ex)
		{
			print($ex->getMessage());
		}
	}

}// end class


?>