<?php
require_once('../database/database.php');
require_once ("object/Preso.php");

class PresoModel extends Preso
{
	function __construct()
	{
	}

	public function Listar()
	{
		$database = new Database();
		return $database->Listar('viewpresos','preso');
	}

	public function Manipular($_comando, $_presoID, $_preso, $_infopen, $_unidadePrisionalID)
	{
		try
		{
			//$_comando='insert'; $_presoID=0; $_preso='ferreira filho'; $_infopen=123231; $_unidadePrisionalID=2;
			$database = new Database();
			$query = "CALL spPresosManipular('$_comando', '$_presoID', '$_preso', '$_infopen', '$_unidadePrisionalID') ";
			$sentenca = $database::prepare($query);
			$sentenca->execute();
			$sentenca->fetchAll();

		}
		catch (Exception $ex)
		{
			print($ex);
		}
	}

	public function Localizar($_localizar , $_formatoSaida )
	{
		$database = new Database();
		$resultado = $database->LocalizarAproximado('viewpresos', 'preso', $_localizar, 'preso');
		switch ($_formatoSaida)
		{
			case "json":
				foreach ($resultado as $row)
				{
					$array[] = array("value" => $row->presoID , "label" => $row->preso);
				}
				return json_encode( $array);
				break;
			case "array":
				return $resultado;
				break;
		}
	}

	/**
	 * @param $_localizar = (Inteiro) id do Preso a ser localizado
	 * @param $_formatoSaida = podendo ser array ou json
	 * @return mixed|null|string
	 */
	public function LocalizarID($_localizar, $_formatoSaida)
	{
		$dataBase = new DataBase();
		$resultado = $dataBase->LocalizarExato("presos","presoID", $_localizar, "presoID");
		switch($_formatoSaida)
		{
			case "array":
				return $resultado;
			break;
			case "json":
				return json_encode($resultado);
			break;

			default :
				return null;
		}

	}

	public function AssociarSolicitante($_comando, $_presoID, $_solicitanteID)
	{
		try
		{
			$database = new DataBase();



		}
		catch(Exception $ex)
		{
			throw new $ex->getMessage();
		}

	}

	
}//END class
?>