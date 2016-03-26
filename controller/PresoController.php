<?php
require_once("../model/PresoModel.php");
require_once("../model/object/Preso.php");
$presoModel = new PresoModel();
$preso = new Preso();

$action            = isset($_POST["action"])    ? $_POST["action"] : null;
$formatoSaida      = isset($_POST["formatoSaida"]) ? $_POST["formatoSaida"] : null;
$preso->presoID    = isset($_POST["presoID"])   ? $_POST["presoID"] : null;
$preso->preso      = isset($_POST["preso"])     ? $_POST["preso"] : null;
$preso->infopen     = isset($_POST["infopen"])     ? $_POST["infopen"] : null;
$preso->unidadePrisionalID = isset($_POST["unidadePrisionalID"]) ? $_POST["unidadePrisionalID"] : null;
var_dump($action);
var_dump($preso);

switch($action)
{
    case "localizar":
        if((isset($preso->preso)) && (isset($formatoSaida)))
        {
            //talvez seja necessario uma session de retorno -
            return  $presoModel->Localizar($preso->preso, $formatoSaida);
        }
        break;

    case "localizarID" :
        if((isset($preso->presoID))  && (isset($formatoSaida)) )
        {
            return $preso->LocalizarID( $presoID, $formatoSaida);
        }


    case "insert":

//        if((isset($preso->preso)) && (isset($preso->infopen )))
//        {
            $presoModel->Manipular($action , 0, $preso->preso, $preso->infopen, $preso->unidadePrisionalID);

//        }
        break;

    default:
        print("opcao Invalida");
}
?>




<!---->
<?php
//require_once("../model/PresoModel.php");
//$preso             = new PresoModel();
//$action            = isset($_GET["action"]) ? $_GET["action"] : null;
//$formatoSaida      = isset($_GET["formatoSaida"]) ? $_GET["formatoSaida"] : null;
//$preso->presoID    = isset($_GET["presoID"]) ? $_GET["presoID"] : null;
//$preso->preso      = isset($_GET["preso"]) ? $_GET["preso"] : null;
//
//switch($action)
//{
//    case "localizar":
//        if((isset($preso->preso)) && (isset($formatoSaida)))
//        {
//            //talvez seja necessario uma session de retorno -
//            return  $preso->Localizar($preso->preso, $formatoSaida);
//        }
//        break;
//
//    case "localizarID" :
//        if((isset($preso->presoID))  && (isset($formatoSaida)) )
//        {
//            return $preso->LocalizarID( $presoID, $formatoSaida);
//        }
//
//
//    case "insert":
//
//        break;
//
//
//
//    default:
//        print("opcao Invalida");
//}
//?>
