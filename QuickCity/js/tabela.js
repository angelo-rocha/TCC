function exportar(tab)
{
    var csv = 'NOME; CARTAO; VALOR; DATA DE RECARGA \n';
        var nome = document.getElementsByClassName("dono");
        var cartao = document.getElementsByClassName("cartao");    
        var valor = document.getElementsByClassName("valor");
        var data = document.getElementsByClassName("data");
    
     for (i = 0; i < nome.length; i++) {
        csv+= nome[i].innerHTML +';'+ cartao[i].innerHTML+';'+ valor[i].innerHTML+';'+data[i].innerHTML+"\n";
     }
    
    var hiddenElement = document.createElement('a');
    hiddenElement.href = 'data:text/csv;charset=utf-8,' + encodeURI(csv);
    hiddenElement.target = '_blank';
    hiddenElement.download = 'produtos.csv';
    hiddenElement.click();
}