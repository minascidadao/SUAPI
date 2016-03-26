	<!DOCTYPE html>
	<html lang="br">
	<head>
		<meta charset="utf-8">
		<title>SOLICITACAO MANIPULAR</title>
		<!-- <script type="text/javascript" src="../model/getUrlParameter.js"></script> -->
<!--		<link rel="stylesheet" href="js/jquery-ui.min.css">-->
<!--		<script src="js/external/jquery/jquery.js"></script>-->
		<script type="text/javascript" src="../model/solicitacaoManipular.js"> </script>
	</head>

	<body>
		<form  method="post"  action="../controller/solicitacaoController.php">
			<div class="container-fluid">
				<div class="page-header h3">SOLICITAÇÃO
					<span id="spanSolicitacaoID" hidden="hidden" >spanSolicitacaoID</span> </div>

				<?php
				//require_once("../controller/solicitacaoController.php");
				require_once("../model/SolicitacaoModel.php");
				require_once("../model/solicitacaoTipo.php");
				require_once("../model/solicitanteModel.php");
				require_once("../model/presoModel.php");
				require_once("../model/UnidadePrisionalModel.php");

				$solicitacaoTipo = new SolicitacaoTipo();
				$solicitacoesTipos = $solicitacaoTipo->Listar();

				$preso = new PresoModel();
				$presos = $preso->Listar();

				$solicitante = new SolicitanteModel();
				$solicitantes = $solicitante->Listar();

//				$unidadePrisional = new UnidadePrisional();
//				$unidadesPrisionais = $unidadePrisional->Listar();
				?>

				<!-- PRIMEIRA LINHA DO FORMULARIO-->
				<div class="form-group">
					<div class="form-group col-md-4 ">
						<label for="selectSolicitacaoTipo">SOLICITACAO TIPO</label>
						<select  id="selectSolicitacaoTipo"  name="solicitacaoTipoID" class="form-control" required="true" autofocus>
							<option value="" disabled selected > </option>
							<?php
							foreach($solicitacoesTipos as $row)
							{
								$isSelected = $row->solicitacaoTipoID == $_GET['solicitacaoTipoID'] ? "selected" : NULL;
								print("<option value= $row->solicitacaoTipoID isSelected> $row->solicitacaoTipo </option>");
							}
							?>
					  </select>
					</div>

					<div class="form-group col-md-6 ">
						<label for="selectPreso">PRESO</label>
						<!-- <select id="selectPreso" class="form-control" onchange="presoDetalhes(this.value);" ">-->
						<select id="selectPreso" name="presoID" class="form-control"  required >
						<option value="" disabled selected > </option>
						<?php
						foreach($presos as $row)
						{
							//$isSelected = ($row->presoID == $_GET['presoID']) ? 'selected' : NULL;
							print("<option 	value='$row->presoID' data-infopen='$row->infopen' data-unidadeprisional='$row->unidadePrisional' data-unidadeprisionalid='$row->unidadePrisionalID'> $row->preso</option>");
						}
						?>
					  </select>
					 </div>

					<div class="form-group col-md-2 ">
						<label for="inputInfopen">INFOPEN </label>
						<input id="inputInfopen"  class="form-control" value="" disabled  style="background-color:white"  >
					</div>

					<div class="form-group col-md-4">
						<label for="inputUnidadePrisional">UNIDADE PRISIONAL</label>
						<input id="inputUnidadePrisional" class="form-control" data-unidadePrisionalID=""  disabled style="background-color: white" >

					</div>



				</div> <!-- END FORM GROUP PRIMEIRA LINHA -->

				<!-- SEGUNDA LINHA  DO FORMULARIO-->
				<div class="form-group">

					<div class="form-group col-sm-4">

						<label for="selectSolicitante">SOLICITANTE</label>
						<select id="selectSolicitante" name="solicitanteID" class="form-control" required >
							<option value=""> </option>
						</select>
					</div>

					<div class="form-group col-sm-2">
						<label for="inputParentesco">PARENTESCO</label>
						<input id="inputParentesco"  class="form-control" value="" disabled  style="background-color:white" >
					</div>


					<div class="form-group col-sm-2">
						<label for="inputRg">RG</label>
						<input id="inputRg"  class="form-control" value="" disabled  style="background-color:white" >
					</div>

					<div class="form-group col-lg-4" id="divEntreguePara" style="display:none;">
						<label for="textEntreguePara">ENTREGUE PARA</label>
						<input type="text" name="entreguePara" id="inputEntreguePara" class="form-control">
					</div>

					<div class="row"></div>

				</div> <!-- END form-group segunda linha -->

				<!-- input de testes jquery -->

				<!-- FIM input de testes jquery -->

			  	<!-- BOTOES DO RODAPÉ -->

				<div class="page-header">  </div>
					<div class="container-fluid">
						<a id="buttonConfirmar" type="button" class="btn btn-default btn-sm" href="">CONFIRMAR</a>
						<a href="" class="btn btn-default btn-sm">CANCELAR</a>
					</div>
				</div>
			

		</form>
	</body>
	</html>