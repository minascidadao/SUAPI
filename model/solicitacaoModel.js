// JavaScript Document

function entregar(id)
{
	var entreguePara = null;
	entreguePara=window.prompt('Entregue para:'); 
	if(entreguePara!==null)
    {
		if(entreguePara=='')
        {
			return alert('ENTREGA NAO EFETUADA\nNECESSÁRIO INFORMAR O  NOME DO SOLICITANTE!');
		}
		else 
		{
			window.location = '../controller/solicitacaoController.php?action=entregar&solicitacaoID='+ id + '&entreguePara='+ entreguePara.toUpperCase() ;
		}
    }
	else
	{
		return false;
	}
}

function visualizar(elemento)
{
	solicitacaoID = 		elemento.getAttribute('data-solicitacaoID');
	var solicitacaoTipo= 	elemento.getAttribute('data-solicitacaoTipo');
	var preso= 				elemento.getAttribute('data-preso');
	var infopen= 			elemento.getAttribute('data-infopen');
	var unidadePrisional= 	elemento.getAttribute('data-unidadePrisional');
	var solicitante = 		elemento.getAttribute('data-solicitante');
	var dataSolicitacao= 	elemento.getAttribute('data-dataSolicitacao');
	var entreguePara= 		elemento.getAttribute('data-entreguePara');
	dataEntrega= 			elemento.getAttribute('data-dataEntrega');

	//moment.js

	//end momment

	window.document.getElementById('inputSolicitacaoTipo').value= solicitacaoTipo;
	window.document.getElementById('inputPreso').value= preso;
	window.document.getElementById('inputInfopen').value= infopen;
	window.document.getElementById('inputUnidadePrisional').value= unidadePrisional;
	window.document.getElementById('inputSolicitante').value= solicitante;
	window.document.getElementById('dateDataSolicitacao').value= dataSolicitacao;
	window.document.getElementById('inputEntreguePara').value= entreguePara;
	window.document.getElementById('dateDataEntrega').value= dataEntrega;
	
}

function imprimir()
{
	var params = [
		'height=600',
		'width=800',
		'fullscreen=yes',
		'scrollbars=yes',
		'menubar=yes'
	].join(',');
	var endereco = '../controller/solicitacaoController.php?action=imprimir&solicitacaoID='+ solicitacaoID;
	window.open(endereco,'popImprimir',params );
}

