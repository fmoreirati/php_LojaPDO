function validaCampos() {
    var f = document.getElementsByClassName("form");
    var c = f[0].getElementsByClassName("valida");
    var erros = 0;
    for(var i=0; i < c.length; i++){
        if (c[i].value == "" || c[i] == null){
            c[i].style.border = "solid #f00";
            erros = 1;
        } else {
            c[i].style.border = "";
        }
    }
    if(erros == 1){
        return false;
    }
}
/* getElementById(): seleciona pelo ID do elemento/componente;
 * getElementsByClassName(): seleciona todos os elementos da mesma class;Retorna um vetor de componentes;
 * getElementsByTagName(): seleciona todos as tags pelos nome; Retorna um vetor de elementos;
 *
 *  Alternativas
 *
 *  querySelector(): seleciona um elemento do documento;
 *  querySelectorAll(): seleciona todos os elementos do documento; Retorna um vertor de elementos;
 */
function validaCampos2(){
    var f = document.querySelector(".form");
    var c = f.querySelectorAll(".valida");
    var erros = 0;
    for(var i=0; i < c.length; i++){
        if (c[i].value == "" || c[i] == null){
            c[i].style.border = "solid #f00";
            c[i].placeholder = "Campo Obrigatório!";
            erros = 1;
        } else {
            c[i].style.border = "";
        }
    }
    if(erros == 1){
        return false;
    }
}

function TestaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
    //strCPF  = RetiraCaracteresInvalidos(strCPF,11);
    if (strCPF == "00000000000")
	return false;
    for (i=1; i<=9; i++)
	Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;
    if ((Resto == 10) || (Resto == 11))
	Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) )
	return false;
	Soma = 0;
    for (i = 1; i <= 10; i++)
       Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
    if ((Resto == 10) || (Resto == 11))
	Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) )
        return false;
    return true;
}

document.querySelector(".form").onsubmit = function() {return validaCampos2()};

//$(".form").onsubmit = function() {return validaCampos2()};


$(document).ready(function(){
    $("#cpf").blur(function(){
        if (!TestaCPF(this.value)){
            alert("CPF Invalido!");
            //$("#cpf").focus();
            //$("#cpf").value = "";
            }
    });
    //$("#cpf").mask('999.999.999-99');
    //$("#dataNasc").datepic$ker();

    $(".contaNum").keyup(function(){
        quant = $(this).val().length;
        $(".mostraNum").html(" Digitos: "+ quant);
        if (quant == 14){
            $(".mostraNum").css("color","#0a0");
        } else {
            $(".mostraNum").css("color","#a00");
        }

    });
});


