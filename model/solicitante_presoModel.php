<?php
/**
 *
 * User: anibal.filho
 * Date: 28/01/2016
 * Time: 16:17
 */
require_once ("../dataBase/dataBase.php");


class solicitante_presoModel
{
    //PROPRIEDADES
    public $solicitanteID;
    public $presoID;
    public $parentescoID;

    /***
     * ASSOCIAR PARENTES ENTRE PRESOS E SOLICITANTES
     * @param $action           - opcoes permitidas sao ASSOCIAR/DESASOCIAR
     * @param $_solicitanteID   - codigo do solicitante
     * @param $_presoID         - codigo do preso
     * @param $_parentescoID    - relacao do solicitante com o preso
     */
    public function Associar($action,$_solicitanteID, $_presoID, $_parentescoID){
        try{
            $database = new DataBase();
            $query = "CALL solicitantes_pressosAssociar('$action',$_solicitanteID', '$_presoID', '$_parentescoID') ;";
            $sentenca = $database::prepare($query);
            $sentenca->execute();
        }catch (Exception $ex){
            echo $ex->getMessage();
        }
    }//END associar()

    public function LocalizarPresoID($_presoID, $_formatoSaida) {
        try{
            $database = new DataBase();
            $query = "SELECT * FROM viewSolicitantes_presos WHERE presoID = '$_presoID'";
            $sentenca = $database::prepare($query);
            $sentenca->execute();
            $resultado  = $sentenca->fetchAll();
            switch($_formatoSaida){
                case "select":
                    print("<select id='selectSolicitante' class='form-control' >");
                    foreach ($resultado as $linha){
                        print("<option  data-parentesco='". $linha->parentesco ."'  data-rg='". $linha->rg ."'value='". $linha->solicitanteID."'>". $linha->solicitante."</option>");
                    }
                    print("</select>");
                    break;

                default:
                    break;
            }
        }
        catch(Exception $ex){
            print($ex);
        }
    }




}//END class