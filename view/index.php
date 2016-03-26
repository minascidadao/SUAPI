<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>= S U A P I = Solicitações</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="css/footer.css" rel="stylesheet">
    <script type="text/javascript">
        function  about(){
                window.alert('ABOUT......\n\nCoordenador de projeto: CHARLYSTON OLIVEIRA\nDesenvolvimento: ANÍBAL FERREIRA FILHO');

        }

    </script>

</head>

<body>
<form >
 <!-- Static navbar -->
    <nav class="navbar  navbar-inverse  navbar-static-top" style="box-shadow: 0px 1px 10px 0.1px #5e5e5e" >
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">S U A P I  </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
			<li class="disabled"><a href="index.php">Home</a></li>
            <li class=""><a href="?page=solicitacaoManipular&action=insert">Solicitar</a></li>
            <li><a href="?page=solicitacaoLocalizar"  >Localizar</a></li>
         
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="?page=presoLocalizar">Preso</a></li>
<!--                  <li><a href="?page=presoManipular">Preso</a></li>-->
                  <li><a href="?page=solicitanteManipular">Solicitante</a></li>

                  <!--                <li><a href="#">Something else here</a></li>
                                  <li role="separator" class="divider"></li>
                                  <li class="dropdown-header">Nav header</li>
                                  <li><a href="#">Separated link</a></li>
                                  <li><a href="#">One more separated link</a></li>
                  -->              </ul>
            </li>
            
          </ul>
          
            <ul class="nav navbar-nav navbar-right">
            <li><a href="?page=login">Sair</a></li>
          </ul>

          
<!--          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
-->          
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <div id="divConteudo">
        <?php
            $page = isset($_GET["page"]) ? $_GET["page"] : null;
            if(isset($page))
            {
                switch ($page)
                {
                    case "solicitacaoManipular":
                        include("solicitacaoManipular.php");
                        break;
                    case "solicitacaoLocalizar":
                        include("solicitacaoLocalizar.php");
                        break;
                    case "presoLocalizar":
                        include("presoLocalizar.php");
                        break;
                    case "presoManipular":
                        include("presoManipular.php");
                        break;
                    case "solicitanteManipular":
                        include("solicitanteManipular.php");
                        break;
                    case "login":
                        include("login.php");
                        break;
                }
            }
        ?>
    
    </div>

    </form>

<footer class="footer" style="box-shadow: 0px -2px 10px 0.1px #5e5e5e  ">
    <div class="container">
        <p onclick="about();">
            <span class="text-muted"> Copyright © 2016 Minas Cidadão Centrais de Atendimento S/A. Todos Direitos Reservados.  </span>
            <span id="" class="text-danger text-right">© Equipe Ti</span>&nbsp; Desenvolvimento
        </p>
    </div>
</footer>


</body>
</html>
