<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
    <script type="text/javascript" src="../model/getUrlParameter.js"></script>
    <script type="text/javascript" src="../model/ManipularOnLoad.js"></script>
    <?php
        require_once ("../model/UnidadePrisionalHTML.php");
        $unidadePrisionalHTML = new UnidadePrisionalHTML();
    ?>

</head>
<body >
<div id="divMenu"></div>
<form method="Post" action="../controller/PresoController.php" id="formPresoManipular">
    <input  name="action" id="inputAction">
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="page-header h3"> DADOS DO PRESO </div>

	   		<div class="col-md-5">
            <label for="inputPreso" >PRESO            </label>
            <input id="inputPreso" name="preso" type="text" required class="form-control">
			</div>
            <div class="col-md-2">
            <label for="inputInfopen"> INFOPEN             </label>
            <input type="number" id="inputInfopen" name="infopen" required class="form-control" >
    
    		</div> 
            <div class="col-md-5 pull-right">
            <label for="selectUnidadePrisional">UNIDADE PRISIONAL</label>
                <?php
                    $unidadePrisionalHTML->Select();
                ?>
            </div>
         
	    </div> <!-- col-md-12 -->
    
    </div> <!-- / ccntainer -->
    
        
    <div class="container-fluid"> <!-- UNIDADE PRISIONAL -->
        <div class="col-md-12" id="divAssociar"  style="display:none">
		<br><br>
        <div class="page-header h3"  > SOLICITANTES RELACIONADOS </div>
        	<div class="container-fluid">
            
            <a class="btn btn-default btn-md glyphicon glyphicon-plus" onClick="$('#divLocalizar').show(150);" id="buttonAddSolicitante" ></a>
            <p></p>

           <div id="divLocalizar" style="display:none;" >
             <label for="inputLocalizar">
            <select name="selectSolicitante" id="selectSolicitante" class="form-control">
            	<option value="solicitanteID">SOLICITANTE NOME DO CAMARADA QUE VAI VISITAR</option>
				<option value="solicitanteID">SOLICITANTE</option>
            </select>
            </label>
            <label for="selectParentesco">
            <select name="selectParentesco" id="selectSolicitante" class="form-control">
            	<option value="solicitanteID">PARENTESCO</option>
				<option value="solicitanteID">PARENTESCO</option>
            </select>
            </label>
            <input type="button" class="btn btn-default" value="ADICIONAR" onClick="$('#divLocalizar').hide(100)">
           </div> <!-- DIV LOCALIZAR -->
          
           
          
            	<table class="table table-condensed">
                	<thead>
                    	<th></th>
                    	<th>SOLICITANTE</th>
                        <th>PARENTESCO</th>
                    </thead>
                	<tr>
                    	<td>
                        <a class="btn btn-danger btn-xs glyphicon glyphicon-remove"></a>  </td>
                        <td class="">SOLICITANTE NOME DO CAMARADA QUE VAI VISITAR</td>
                       	<td>xxxxxxxxx</td>
                    
                    </tr>
                    <tr>
                    	
                        <td><a class="btn btn-danger btn-xs glyphicon glyphicon-remove"></a> </td>
                       	<td>xxxxxxxxx</td>
                       	<td>xxxxxxxxx</td>
                    
                    </tr>
                    <tr>
                    	
                        <td><a class="btn btn-danger btn-xs glyphicon glyphicon-remove"></a></td>
                       	<td>xxxxxxxxx</td>
						<td>xxxxxxxxx</td>
                    
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-danger btn-xs glyphicon glyphicon-remove"></a></td>
                        <td>xxxxxxxxx</td>
                        <td>xxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-danger btn-xs glyphicon glyphicon-remove"></a></td>
                        <td>xxxxxxxxx</td>
                        <td>xxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-danger btn-xs glyphicon glyphicon-remove"></a></td>
                        <td>xxxxxxxxx</td>
                        <td>xxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-danger btn-xs glyphicon glyphicon-remove"></a></td>
                        <td>xxxxxxxxx</td>
                        <td>xxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-danger btn-xs glyphicon glyphicon-remove"></a></td>
                        <td>xxxxxxxxx</td>
                        <td>xxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-danger btn-xs glyphicon glyphicon-remove"></a></td>
                        <td>xxxxxxxxx</td>
                        <td>xxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-danger btn-xs glyphicon glyphicon-remove"></a></td>
                        <td>xxxxxxxxx</td>
                        <td>xxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-danger btn-xs glyphicon glyphicon-remove"></a></td>
                        <td>xxxxxxxxx</td>
                        <td>xxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-danger btn-xs glyphicon glyphicon-remove"></a></td>
                        <td>xxxxxxxxx</td>
                        <td>xxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-danger btn-xs glyphicon glyphicon-remove"></a></td>
                        <td>xxxxxxxxx</td>
                        <td>xxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-danger btn-xs glyphicon glyphicon-remove"></a></td>
                        <td>xxxxxxxxx</td>
                        <td>xxxxxxxxx</td>
                    </tr>

                
                </table>
            
            </div> <!-- div col-md-5 -->


    
    	</div> <!-- col-md-12  divAssociar-->


        <div class="page-header h3"></div>

        <a id="buttonConfirmar" type="button" class="btn btn-default btn-sm" href="">CONFIRMAR ancora</a>
        <button type="submit" id="buttonConfirmar" class="btn btn-default btn-sm "> CONFIRMAR </button>

        <a href="index.php" class="btn btn-default btn-sm">Cancelar</a>

    </div> <!-- / -->
    


</form>
</body>
</html>
