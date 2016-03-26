
window.onload = function(){
    //RECUPERA A ACAO SELECIONADA (insert, update, delete)
    //var action = getUrlParameter('action');
    //alert(action);

    // CRIA EVENTO SELECIONAR O PRESO
    document.getElementById('selectPreso').addEventListener('change', function(){
        var selectPreso = jQuery('select#selectPreso option:selected');
        window.document.getElementById('inputUnidadePrisional').value= selectPreso.data('unidadeprisional');
        window.document.getElementById('inputInfopen').value = selectPreso.data('infopen');
        unidadePrisionalID = selectPreso.data('unidadeprisionalid');

        var ajaxSelect = new XMLHttpRequest();
        ajaxSelect.onreadystatechange = function(){
            if((ajaxSelect.readyState==4) && (ajaxSelect.status==200) ){
                document.getElementById('selectSolicitante').innerHTML = ajaxSelect.responseText;
                document.getElementById('selectSolicitante').focus();
            }
        }; //END ajax.onreadystatechange
        ajaxSelect.open('GET','../controller/solicitante_presoController.php?action=localizarPresoID&presoID='+ selectPreso.attr('value') + '&formatoSaida=select', true);
        ajaxSelect.send(null);

        //return false;
    });// END selectPreso onChange

    //ADICIONANDO EVENTOS focus e change PARA O SELECT SOLICITANTE PARA ATUALIZAR O RG E PARENTESCO DO SOLICITANTE COM O PRESO
    document.getElementById('selectSolicitante').addEventListener('focus', function(){
        window.document.getElementById('inputRg').value= document.querySelector('#selectSolicitante>option').getAttribute('data-rg');
        window.document.getElementById('inputParentesco').value= document.querySelector('#selectSolicitante>option').getAttribute('data-parentesco');
    });
    document.getElementById('selectSolicitante').addEventListener('change', function(){
        window.document.getElementById('inputRg').value= jQuery('select#selectSolicitante option:selected').data('rg');
        window.document.getElementById('inputParentesco').value= jQuery('select#selectSolicitante option:selected').data('parentesco');('data-parentesco');
    });

    //enviar methdo get para o controller após clicar no botao Confirmar
    document.getElementById('buttonConfirmar').addEventListener('click', function(){

        var solicitacaoID = 0;
        var solicitacaoTipoID = document.getElementById('selectSolicitacaoTipo').value;
        var presoID = document.getElementById('selectPreso').value;
        var solicitanteID = document.getElementById('selectSolicitante').value;
        //var unidadePrisionalID =  document.querySelector('#selectPreso>option').getAttribute('data-unidadeID').value;
        var entreguePara = document.getElementById('inputEntreguePara').value;

        var ajaxConfirmar = new XMLHttpRequest();
        

        //alert(solicitacaoID + solicitacaoTipoID + presoID + solicitanteID + unidadePrisionalID + entreguePara);

        ajaxConfirmar.onreadystatechange = function(){
            if((ajaxConfirmar.readyState==4) && (ajaxConfirmar.status==200)){
                if(ajaxConfirmar.responseText){
                    window.alert('Erro na Ação '+ action +'\nOPERACAO NAO REALIZADA!');
                    window.alert(ajaxConfirmar.responseText);
                }
                else
                    window.location('../view/index.php?page=solicitacaoLocalizar');


            }//END verificacao Status
        };// END AjaxConfirmar
        //$solicitacaoModel->Manipular($solicitacao->action ,$solicitacao->solicitacaoID, $solicitacao->solicitacaoTipoID,$solicitacao->solicitanteID, $solicitacao->presoID, $solicitacao->unidadePrisionalID, $solicitacao->entreguePara);
        //http://localhost:81/suapi/controller/solicitacaoController.php?action=insert&solicitacaoID=1&solicitacaoTipoID=1&presoID=1&solicitanteID=1&unidadePrisionalID=1&entreguePara=1
            
        action = getUrlParameter('action'); 
        if(!entreguePara)
            entreguePara = 'NAO ENTREGUE';
        //alert(entreguePara);

        ajaxConfirmar.open('GET','../controller/solicitacaoController.php?action='+action+'&solicitacaoID='+solicitacaoID+'&solicitacaoTipoID='+solicitacaoTipoID+'&presoID='+presoID+'&solicitanteID='+solicitanteID+'&unidadePrisionalID='+unidadePrisionalID+'&entreguePara='+entreguePara+'/');
        ajaxConfirmar.send();

    });// END evento click buttonConfirmar



var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};



};// END window.onLoad


