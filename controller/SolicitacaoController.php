<?php

require_once("../model/SolicitacaoModel.php");
$solicitacaoModel = new SolicitacaoModel();



//if(!isset($_SESSION))
//    session_start();

//$selectSolicitacaoTipo = $_POST['selectSolicitacaoTipo'];
//include('index.php?casa=$selectSolicitacaoTipo');
    /*
    solicitacaoID int(11) AI PK
    solicitacaoTipoID int(11)
    solicitanteID int(11)
    presoID int(11)
    unidadePrisionalID int(11)
    dataSolicitacao datetime
    entregue tinyint(1)
    entreguePara varchar(90)
    dataEntrega datetime
    arprovada tinyint(1)
    */

    $solicitacao = new SolicitacaoModel();
    $solicitacao->action        =   isset( $_GET['action'])         ? $_GET['action']: NULL  ;
    $solicitacao->solicitacaoID = 	isset( $_GET['solicitacaoID'])  ? $_GET['solicitacaoID']: NULL ;
    $solicitacao->solicitacaoTipoID=isset( $_GET['solicitacaoTipoID'])  ? $_GET['solicitacaoTipoID']: NULL ;
    $solicitacao->solicitanteID = 	isset($_GET['solicitanteID'])     ? $_GET['solicitanteID']: NULL;
    $solicitacao->presoID       = 	isset($_GET['presoID'])     ? $_GET['presoID']: NULL;
    $solicitacao->unidadePrisionalID=isset($_GET['unidadePrisionalID'])     ? $_GET['unidadePrisionalID']: NULL;
    $solicitacao->entreguePara  =	isset($_GET['entreguePara'])    ? $_GET['entreguePara']: NULL;

//$_action, $_solicitacaoID, $_solicitacaoTipoID, $_solicitanteID, $_presoID, $_unidadePrisionalID, $_entreguePara

    if (isset($solicitacao)){
        switch ($solicitacao->action) {
            case "entregar":
                $solicitacaoModel->Entregar($solicitacao->solicitacaoID, $solicitacao->entreguePara);
                header("location: ../view/index.php?page=solicitacaoLocalizar");
                break;
            case "visualizar":
                $solicitacaoModel->LocalizarID($solicitacao->solicitacaoID);
                header("location: ../view/solicitacaoVisualizar.php?");
                break;

            case "imprimir":
                $solicitacaoSelecionada = $solicitacaoModel->localizarID($solicitacao->solicitacaoID);
                if (isset($solicitacaoSelecionada)) {
                    $_SESSION["solicitacaoImprimir"] = $solicitacaoSelecionada;
                    if ($solicitacaoSelecionada->impressaoTipo == "PADRAO") {
                        header("location: ../view/solicitacaoPadraoImprimir.php");
                    }
                    if ($solicitacaoSelecionada->impressaoTipo == "VISITA") {
                        header("location: ../view/solicitacaoVisitaImprimir.php");
                    }
               }
                break;
            case "delete":
                $solicitacaoModel->Delete($solicitacao->solicitacaoID);
                header("location: ../view/index.php?page=solicitacaoLocalizar");
                break;

            case "insert":
            case "update":
            //case "delete":

                $solicitacaoModel->Manipular($solicitacao->action ,$solicitacao->solicitacaoID, $solicitacao->solicitacaoTipoID,$solicitacao->solicitanteID, $solicitacao->presoID, $solicitacao->unidadePrisionalID, $solicitacao->entreguePara);
                //header('location: ../view/index.php?page=login');

                break;
            default:
                break;

        }//END switch case

}
?>







