<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>SOLICITACAO - LOCALIZAR</title>
	<script type="text/javascript" src="js/moment.js"></script>
	<script src="../model/solicitacaoModel.js"></script>
	<script type="text/javascript">

	</script>

</head>
<body >

<form method="get" id="formPresoLocalizar">
	<input type="hidden" name="page" value="presoLocalizar"
    <div class="container-fluid">
    <div class="container-fluid">
      <div class="page-header h3">LOCALIZAR PRESO</div>
      <div class="input-group col-md-6 col-md-push-3"> <span class="input-group-btn">
		<input required name="localizar" id="inputLocalizar" type="text" autofocus  class="form-control " placeholder="DIGITE O INFOPEN OU NOME DO PRESO">
		<button id="buttonLocalizar" class="btn btn-default"  href="" onclick="SolicitacaoLocalizar()" > <span class="glyphicon glyphicon-search"></span> </button>
		</span> </div>
		<p><br> </p>

	<div id="divConteudo">

    </div> <!--/divConteudo -->
    </div>
    </div>
    <!-- container fluid -->
</form>
</body>
</html>


