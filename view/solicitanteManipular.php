<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
<!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
<!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
</head>
<body >
<div id="divMenu"></div>
<form method="get" action="../controller/solicitanteController.php">
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="page-header h3"> DADOS SOLICITANTE </div>

	   		<div class="col-md-5 ">
            <label for="inputPreso" >SOLICITANTE            </label>
            <input id="inputPreso" name="preso" type="text" required class="form-control">
			</div>
            <div class="col-md-2 ">
            <label for="inputInfopen"> RG             </label>
            <input type="number" id="inputInfopen" name="infopen" required class="form-control" >
    
    		</div> 
            
         
	    </div> <!-- col-md-12 -->
    
    </div> <!-- / ccntainer -->
    
        
    <div class="container-fluid"> <!-- UNIDADE PRISIONAL -->
		
        
        <div class="col-md-12" >
		<br><br>
        <div class="page-header h3"  > PRESOS RELACIONADOS </div>
        	<div class="container-fluid">
            
            <a class="btn btn-default btn-sm glyphicon glyphicon-plus" onClick="$('#divLocalizar').show(100);" id="buttonAddSolicitante" ></a>
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
            <p></p>
           </div> <!-- DIV LOCALIZAR -->
          
           
          
            	<table class="table table-condensed">
                	<thead>
                    	<th></th>
                    	<th>PRESO</th>
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
                
                </table>
            
            </div> <!-- div col-md-5 -->
        



    <div class="page-header h3"></div>
    
    
		<button type="submit" class="btn btn-default btn-sm ">  CONFIRMAR</button>
		<a href="index.php" class="btn btn-default btn-sm">Cancelar</a>
    

    	</div> <!-- col-md-12 -->
    </div> <!-- / ccntainer -->
    


</form>
</body>
</html>
