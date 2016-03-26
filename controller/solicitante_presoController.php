<?php
/**
 *
 * User: anibal.filho
 * Date: 28/01/2016
 * Time: 17:23
 */

require_once ("../dataBase/database.php");
require_once("../model/solicitante_presoModel.php");

$solicitante_preso = new solicitante_presoModel();

$action                             = isset($_GET["action"]) ? $_GET["action"]: null;
$formatoSaida                       = isset($_GET["formatoSaida"]) ? $_GET["formatoSaida"]: null;
$solicitante_preso->solicitanteID   = isset($_GET["solicitanteID"]) ? $_GET["solicitanteID"]: null;
$solicitante_preso->presoID         = isset($_GET["presoID"]) ? $_GET["presoID"]            : null;
$solicitante_preso->parentescoID    = isset($_GET["parentescoID"]) ? $_GET["parentescoID"]  : null;

//function utf8ize($d) {
//    if (is_array($d)) {
//        foreach ($d as $k => $v) {
//            $d[$k] = utf8ize($v);
//        }
//    } else if (is_string ($d)) {
//        return utf8_encode($d);
//    }
//    return $d;
//}

if(isset($action) && isset($formatoSaida)){
    switch ($action){
        case "localizarSolicitanteID":

            break;
        case "localizarPresoID":
            if(isset($solicitante_preso->presoID)){
                if($formatoSaida=="select"){
                    return $solicitante_preso->LocalizarPresoID($solicitante_preso->presoID,$formatoSaida);
                }
                else{
                    return print("OPCAO NAO DISPONIVEL");
                }
            }
            break;
    }
}
