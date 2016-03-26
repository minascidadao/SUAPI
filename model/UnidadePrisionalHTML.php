<?php
/**
 * Created by IntelliJ IDEA.
 * User: Usuario
 * Date: 25/03/2016
 * Time: 13:07
 */
require_once("UnidadePrisionalModel.php");

class UnidadePrisionalHTML //extends UnidadePrisionalModel
{

    public function Select()
    {
        $unidadePrisionalModel = new UnidadePrisionalModel();
        $unidadesPrisionais = $unidadePrisionalModel->Listar();
        echo "<select name='unidadePrisionalID' id='selectUnidadePrisional' required class='form-control'>";
        echo "<option value='' disabled selected>";
        foreach ($unidadesPrisionais as $item)
        {
            echo "<option value= $item->unidadePrisionalID> $item->unidadePrisional </option> ";
        }
        echo "</select>";

    }
}
