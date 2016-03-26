<?php
require_once ('Config.php');
require_once ('Comando.php');


class DataBase 
{

	private static $instance;

	public static function getInstance()
	{

		if(!isset(self::$instance))
		{

			try 
			{
				self::$instance = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
				self::$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			} 
			catch (PDOException $exception) 
			{
				echo $exception->getMessage();
			}

		}

		return self::$instance;
	}
 	
	public static function prepare($query)
	{
		return self::getInstance()->prepare($query);
	}
	
	/*abstract class Comando
	{
		const select=0;
		const insert=1;
		const update=2;
		const delete=3;
		
	}*/
	
	public function Listar($_tabela, $_ordem)
	{
		try
		{
			$query = "SELECT  * FROM $_tabela ORDER BY $_ordem";
			$sentenca = DataBase::prepare($query);
			$sentenca->execute();
			return $sentenca->fetchAll();
		}
		catch (Exception $ex)
		{ 
			print($ex); 
		}
	}


	/**
	* @param $_tabela
	* @param $_campo
	* @param $_valor
	* @param $_ordem
	* @return mixed array
	* exemplo de uso: Localizar("clientes", "cliente", "nomeDoCliente", "cpf");
    */
	public function LocalizarExato($_tabela, $_campo, $_valor, $_ordem)
	{
		try
		{
			$query = "SELECT  * FROM $_tabela WHERE $_campo = $_valor ORDER BY $_ordem; ";
			$sentenca = DataBase::prepare($query);
			$sentenca->execute();
			return $sentenca->fetch();
		}
		catch (Exception $ex)
		{ 
			print($ex); 
		}
	}
	
	public function LocalizarAproximado($_tabela, $_campo, $_valor, $_ordem)
	{
		try
		{
			$query = "SELECT  * FROM $_tabela WHERE $_campo LIKE CONCAT('%', '$_valor' , '%') ORDER BY $_ordem ";
			$sentenca = DataBase::prepare($query);
			$sentenca->execute();
			return $sentenca->fetchAll();
		}
		catch (Exception $ex)
		{ 
			print($ex); 
		}
	}
	
	public function DeleteID($_tabela, $_atributo, $_valor)
	{
		try
		{
			$query ="DELETE FROM $_tabela WHERE $_atributo = $_valor ";
			$sentenca = DataBase::prepare($query);
			return $sentenca->execute();
		}
		catch(Exception $ex)
		{
			print($ex);	
		}
				
	}
	
	public function Alerta($_mensagem)
	{
		try
		{
			return print(str_replace("%texto%", $_mensagem, "<script type='text/javascript'> alert('%texto%'); </script>"));
		}
		catch (Exception $ex)
		{
			print($ex); 
		}
	}//END Alerta
	
	
	
	
	
	
	
}//END class DataBase
?>