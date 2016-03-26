<?php 
//phpinfo();
require_once("../dataBase/DataBase.php");
require_once("Data.php");
//if(!isset($_SESSION)) session_start();
//if(!isset($_SESSION["login"]))
//{
//	header("location: ../view/index.php?page=login");
//	exit;
//}



class SolicitacaoModel
{
	function __construct()
	{

	}

	public  $action,
			$solicitacaoID,
			$solicitacaoTipoID,
			$solicitanteID,
			$presoID,
			$unidadePrisionalID,
			$dataSolicitacao,
			$entregue,
			$entreguePara,
			$dataEntrega,
			$autorizada;


	//private $entregue;
	
	public function getEntregue()
	{
		if(isset($this->entregue))
		{
			return  $this->entregue == 1 ? 
				"<a class='btn btn-primary btn-xs' href='../controller/solicitacaoController.php?action=entregar&solicitacaoID=$row->solicitacaoID'>	<span class='glyphicon glyphicon-check' data-placement='botton' title='ENTREGAR SOLICITACAO' data-toggle='modal' id='tootip1' data-target=''></span></a>" 
				:
				"<a class='btn btn-primary btn-xs' href='../controller/solicitacaoController.php?action=entregar&solicitacaoID=$this->entregue'>	<span class='glyphicon glyphicon-unchecked' data-placement='botton' title='DESFAZER ENTREGA' data-toggle='modal' id='tootip1' data-target=''></span></a>";
			

//			return  $this->entregue == 1 ? ' <input type="radio" checked disabled class="radio">' : '<input type="radio" disabled> ';
		}
	}
	
	public function setEntregue($entregue)
	{
		$this->entregue = $entregue; 
	}
	
	public function Listar()
	{
		$database= new DataBase();
		return $database->Listar("solicitacoes","solicitacaoID");
	}
		
	public function Entregar($_solicitacaoID, $_entreguePara)
	{
		try
		{
		$query="CALL solicitacoesEntregar('$_solicitacaoID', '$_entreguePara' )";
		$sentenca = DataBase::prepare($query);
		$sentenca->execute();
		}
		catch (Exception $ex)
		{
			print($ex);
		}
	}

	public function Manipular($_action, $_solicitacaoID, $_solicitacaoTipoID, $_solicitanteID, $_presoID, $_unidadePrisionalID, $_entreguePara)
	{
		try
		{

			$query = "CALL solicitacoesManipular( '$_action', '$_solicitacaoID', '$_solicitacaoTipoID', '$_solicitanteID', '$_presoID', '$_unidadePrisionalID', '$_entreguePara')";
			$sentenca = DataBase::prepare($query);
			$sentenca->execute();
			$sentenca->fetchAll();
		}
		catch(Exception $ex){
			print($ex);
		}
	}

	public function Localizar($_localizar)
	{
		$query = "CALL solicitacoesLocalizar('$_localizar')";
		$sentenca = DataBase::prepare($query);
		$sentenca->execute();	
		return $sentenca-> fetchAll();
	}
	
	public function Localizar_($_localizar)
	{
		$data = new Data();
		$resultado = $this->spSolicitacoesLocalizar($_localizar);
		print("
		  <div class='row'></div>
			<table class='table table-striped'>
				<thead>
					<tr>
					<th>CODIGO</th>
					<th>SOLICITAÇÃO</th>
					<th>SOLICITANTE</th>
					<th>DATA SOLICITACAO</th>
					<th>PRESO</th>
					<th>ENTREGUE</th>
					<th> </th>           
					</tr>
				</thead>");
		foreach($resultado as $row)
		{
			print("<tr>");
			print("<td>". $row->solicitacaoID ."</td>");
			print("<td>". $row->solicitacaoTipo ."</td>");
			print("<td>". $row->solicitante ."</td>");
			print("<td align='center'>".  $data->DataFormatada($row->dataSolicitacao) ."</td>");
			//print("<td align='center'>". date('d/m/Y', strtotime($row->dataSolicitacao)) ."</td>");

			print("<td>". $row->preso ."</td>");
			$this->setEntregue($row->entregue);
			//COLUNA entregue
			if($row->entregue)
			{
				$buttonEntregue =  "<a class='btn  btn-md'  href='../controller/solicitacaoController.php?action=entregar&solicitacaoID=$row->solicitacaoID'>
							<span  class='glyphicon glyphicon-check' data-placement='botton' title='ENTREGAR SOLICITACAO' data-toggle='modal' id='tootip1' data-target=''></span></a>";
			}
			else
			{
				$buttonEntregue = "<a class='btn btn-md' href='../controller/solicitacaoController.php?action=entregar&solicitacaoID=$row->solicitacaoID'>	<span class='glyphicon glyphicon-unchecked' data-placement='botton' title='ENTREGAR SOLICITACAO' data-toggle='modal' id='tootip1' data-target=''></span></a>" 	;					
						
			}
			print("<td align='center'>". $buttonEntregue  ."</td>");
			//END coluna 06 entregue
			print("<td class='actions'>
				<a class='btn btn-primary btn-xs' href='../controller/solicitacaoController.php?action=entregar&solicitacaoID=$row->solicitacaoID'>
					<span class='glyphicon glyphicon-envelope' data-placement='botton' title='ENTREGAR SOLICITACAO' data-toggle='modal' id='tootip1' data-target=''></span> 
				</a>

				<a class='btn btn-success btn-xs' onClick=' alert('xxxxxxxx')' href= '' id='buttonVisualizar' data-id='$row->solicitacaoID' name='buttonVisualizar'>
					<span class='glyphicon glyphicon-eye-open'></span> 
				</a>
				<a class='btn btn-warning btn-xs' href= 'solicitacaoManipular.php?comando=update&solicitacaoID=$row->solicitacaoID' >
					<span class='glyphicon glyphicon-pencil'></span> 
				</a>
				<a class='btn btn-danger btn-xs'  href='solicitacaoManipular.php?comando=delete&solicitacaoID=$row->solicitacaoID'  data-toggle='modal' data-target='#delete-modal'>
					 <span class='glyphicon glyphicon-trash'></span>
				 </a>
				</td></tr>"	);
	
		}//end foreach
		print("</table>");
		
	}// end Localizar
	
	
/*	public function LocalizarPorSolicitacaoID($_solicitacaoID)
	{
		try
		{
			if(!$_solicitacaoID) return false;
			$query= "SELECT * FROM viewsolicitacoes WHERE solicitacaoID= $_solicitacaoID ";
			$sentenca = DataBase::prepare($query);
			$sentenca->execute();
			return $_SESSION['solicitacaoSelecionada']= $sentenca->fetch();
			
		}
		catch(Exception $ex)
		{
			print($ex->getMessage());
		}
	}
*/	
	public function LocalizarID($_ID)
	{
		$dataBase = new DataBase();
		return $dataBase->LocalizarExato("viewsolicitacoes", "solicitacaoID", $_ID, "solicitacaoID");
	}
	

	public function Delete($_solicitacaoID)
	{
		$dataBase = new DataBase();
		$dataBase->DeleteID("solicitacoes", "solicitacaoID", $_solicitacaoID);
	}

}// end class
?>