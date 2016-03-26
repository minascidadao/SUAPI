/**
 * Obtem o parametro "action" da url atual
 * caso o valor de action seja diferente de INSERT entao exibe o menu para associar preso/visitante
 */
window.onload= function() {
    var action = getUrlParameter('action');
    if (action !== 'insert') {
        document.getElementById('divAssociar').style['display']='block';
    }
    document.getElementById('inputAction').value= action;

};// END  OnLOAD function
