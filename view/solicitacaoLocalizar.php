<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>SOLICITACAO - LOCALIZAR</title>
<!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
<!--    <script type="text/javascript" src="js/jquery.min.js"></script>-->
<!--    <script type="text/javascript" src="js/bootstrap.min.js"></script>-->
	<script type="text/javascript" src="js/moment.js"></script>
	<script src="../model/solicitacaoModel.js"></script>
	<script type="text/javascript">

	</script>

</head>
<body >
<!--<body onLoad="$('#divMenu').load('menuTop.html');">-->

<form method="get" id="formSolicitacaoLocalizar">
	<input type="hidden" name="page" value="solicitacaoLocalizar"
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="page-header h3">LOCALIZAR SOLICITAÇÃO</div>
      <div class="input-group col-md-6 col-md-push-3"> <span class="input-group-btn">
		<input required name="localizar" id="inputLocalizar" type="text" autofocus  class="form-control " placeholder="DIGITE O PROTOCOLO, INFOPEN OU NOME DO SOLICITANTE">
		<button id="buttonLocalizar" class="btn btn-default"  href="" onclick="SolicitacaoLocalizar()" > <span class="glyphicon glyphicon-search"></span> </button>
		</span> </div>
		<p><br> </p>
      
	<div id="divConteudo">
      
      	
        <?php
		//if(session_status() !== PHP_SESSION_ACTIVE ) session_start();


		require_once("../model/SolicitacaoModel.php");
		require_once("../controller/solicitacaoController.php");
		require_once("../model/Data.php");
		$solicitacaoID=0;
		//if(!isset($_SESSION)) session_start();
		$solicitacaoModel= new SolicitacaoModel();
		
		
		if(isset($_GET['localizar']))
		{
			//CABECALHO DA TABELA DE RESULTADOS DA LOCALIZACAO
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
			$data= new Data();
			$resultado = $solicitacaoModel->Localizar($_GET['localizar']);
			foreach($resultado as $row)
			{
				print("<tr>");
				print("<td>". $row->solicitacaoID ."</td>");
				print("<td>". $row->solicitacaoTipo ."</td>");
				print("<td>". $row->solicitante ."</td>");
				print("<td align='center'>".  $data->DataFormatada($row->dataSolicitacao) ."</td>");
				print("<td>". $row->preso ."</td>");
				
				//coluna  ENTREGUE (checkBox)
				if($row->entregue)
				{	
					//SE solicitacao JA ENTREGUE
					$buttonEntregue = "<a class='btn  btn-md disabled' disabled href='../controller/solicitacaoController.php?action=entregar&solicitacaoID=$row->solicitacaoID'>
								<span  class='glyphicon glyphicon-check' data-placement='botton' title='ENTREGAR SOLICITACAO' data-toggle='modal' id='tootip1' data-target=''></span></a>";
				}
				else 
				{	
					//SE solicitacao NAO ENTREGUE  
					$buttonEntregue = "<a class='btn btn-md' >	<span class='glyphicon glyphicon-unchecked' data-placement='botton' title='ENTREGAR' data-toggle='modal' data-target=' ' id='buttonEntregar' onclick='return entregar($row->solicitacaoID);' ></span></a>" 	;					
				}
				print("<td align='center'>". $buttonEntregue  ."</td>");
//-------------------------------------------------------------------------------------------------------------------
				//BOTOES DE ACAO(action)
				
				//IMPRIMIR
				print("<td class='actions'>
						<a class='btn btn-primary btn-xs' target='_blank' href='../controller/solicitacaoController.php?action=imprimir&solicitacaoID=$row->solicitacaoID'>
					<span class='glyphicon glyphicon-print' data-placement='botton' title='IMPRIMIR' data-toggle='modal' data-target=''></span></a>");
				
				//VISUALIZAR
				print(" <a class='btn btn-success btn-xs'  data-toggle='modal' data-target='#modalVisualizar'  href='#' id='buttonVisualizar' onClick='visualizar(this)'
						data-solicitacaoID	='$row->solicitacaoID'
						data-solicitante		='$row->solicitante'
						data-solicitacaoTipo	='$row->solicitacaoTipo'
						data-preso			='$row->preso'
						data-unidadePrisional='$row->unidadePrisional'
						data-dataSolicitacao	='$row->dataSolicitacao'

						data-infopen			='$row->infopen'
						data-entreguePara	='$row->entreguePara'
						data-dataEntrega		='$row->dataEntrega'>
					<span class='glyphicon glyphicon-eye-open'></span> </a>");
				
				//EDITAR	
				print(" <a class='btn btn-warning btn-xs' href= 'solicitacaoManipular.php?comando=update&solicitacaoID=$row->solicitacaoID' >
					<span class='glyphicon glyphicon-pencil'></span> </a>");
				
				//DELETAR
				print(" <a class='btn btn-danger btn-xs' href='../controller/solicitacaoController.php?action=delete&solicitacaoID=$row->solicitacaoID' 	onclick='return confirm(\" CONFIRMA DELETAR SOLICITACAO  \");' >
					<span class='glyphicon glyphicon-trash' data-placement='botton' title='DELETAR' data-toggle='modal' id='tootip1' data-target=''></span></a> </td> </tr> ");

			}//END foreach
			print("</table>");
		}//END if

//-------------------------------------------------------------------------------------------------------------------
		?>


		<div class="modal fade" id="modalVisualizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" readonly="true">
			<div class="modal-dialog" >
				<div class="modal-content">
					<div class="modal-header">
						...

					</div>
					<div class="modal-body">

						<label for="inputSolicitacaoTipo">SOLICITACAO TIPO</label>
						<input type="text" id="inputSolicitacaoTipo" class="form-control" style="background-color: white" readonly >

						<label for="inputPreso">PRESO</label>
						<input type="text" id="inputPreso" class="form-control" >

						<label for="inputInfopen">INFOPEN</label>
						<input type="text" id="inputInfopen" class="form-control" >

						<label for="inputUnidadePrisional">UNIDADE PRISIONAL</label>
						<input type="text" id="inputUnidadePrisional" class="form-control" >

						<label for="inputSolicitante">SOLICITANTE</label>
						<input type="text" id="inputSolicitante" class="form-control"  >

						<label for="dateDataSolicitacao">DATA SOLICITACAO</label>
						<input type="date" id="dateDataSolicitacao" class="form-control" >

						<label for="inputEntreguePara">ENTREGUE PARA</label>
						<input type="text" id="inputEntreguePara" class="form-control" >

						<label for="dateDataEntrega">DATA ENTREGA</label>
						<input type="date" id="dateDataEntrega" class="form-control" >

					</div>
					<div class="modal-footer">
						<a class='btn btn-primary btn-md' href="#" id="buttonImprimir" onclick="imprimir()" data-dismiss="modal" >
							<span class='glyphicon glyphicon-print' data-placement='botton' title='IMPRIMIR' data-toggle='modal' data-target=''></span>
						</a>
						<button type="button" class="btn btn-default btn-md col-md-5 pull-right" data-dismiss="modal">FECHAR</button>

					</div>
				</div>
			</div>
		</div>


	</div>
    </div>
  </div>
  <!-- container fluid -->
</form>
</body>
</html>
