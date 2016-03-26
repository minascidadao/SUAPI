<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
<link rel="stylesheet" href="css/custonBootStrap.css">
<!--<script src="js/jquery.min.js"></script>-->
<!--<script src="js/bootstrap.min.js"></script>-->
<!--<script src="../model/usuarioModel.js"></script>-->
<title>Login</title>
</head>
<body >

<form  method="post" action="../controller/LoginController.php">
<!--  <input type="hidden" name="action" value="login">
-->  <div class="container vertical-center">
    <div class=" col-sm-3 center-block">
      <div class="panel panel-default " >
        <div class="panel panel-heading">LOGIN</div>
        <div class="panel panel-body"> 
        	<img class="img-rounded center-block" src="images/profile02.png" style="width:80px; height:80px;"> <br>
          <br>
          <div class="input-group"> <span class="input-group-btn">
            <button disabled class="btn btn-default"  > <span class="glyphicon glyphicon-user"></span> </button>
            </span>
            <input name="login"  required type="text" placeholder="Usuário" class="form-control" autofocus>
          </div>
          <br>
          <div class="input-group"> <span class="input-group-btn">
            <button class="btn btn-default" disabled > <span  class="glyphicon  glyphicon-lock"></span> </button>
            </span>
            <input name="senha" required  type="password" class="form-control" placeholder="Senha">
          </div>
          <br>
          <button class="btn btn-default btn-block"  onClick="" >Entrar </button>
        </div> 
      </div>
    </div>
  </div>
</form>
</body>
</html>