

function validaCpf(cpf) {


    var cpf1 = document.querySelector("#cpfcnpj");
    var cpf = cpf1.value;
    
    cpf = cpf.replace(/\.|-/g,"");
  
    if(cpf == "") {
      cpf1.setCustomValidity("Preencha este campo");
    } else {
  
    var Soma;
    var Resto;
    Soma = 0;
    if (cpf == "00000000000" ||
    cpf == "11111111111" ||
    cpf == "22222222222" ||
    cpf == "33333333333" ||
    cpf == "44444444444" ||
    cpf == "55555555555" ||
    cpf == "66666666666" ||
    cpf == "77777777777" ||
    cpf == "88888888888" ||
    cpf == "99999999999") { 
      cpf1.setCustomValidity("CPF inválido");
      return false;
    }
  
    for (i=1; i<=9; i++) Soma = Soma + parseInt(cpf.substring(i-1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;
  
      if ((Resto == 10) || (Resto == 11)) {
       Resto = 0;
      }
  
  
      if (Resto != parseInt(cpf.substring(9, 10)) ) { 
        cpf1.setCustomValidity("CPF inválido");
        return false; 
      }
  
    Soma = 0;
      for (i = 1; i <= 10; i++) Soma = Soma + parseInt(cpf.substring(i-1, i)) * (12 - i);
      Resto = (Soma * 10) % 11;
  
      if ((Resto == 10) || (Resto == 11))  Resto = 0;
      if (Resto != parseInt(cpf.substring(10, 11) ) ) {
        cpf1.setCustomValidity("CPF inválido");
        return false;
      }
      cpf1.setCustomValidity("");
      
      return true;
  
  }
  }



  function validarCNPJ(cnpj) {

    var cnpj1 = document.querySelector("#cnpj");
    var cnpj = cnpj1.value;
 
    cnpj = cnpj.replace(/[^\d]+/g,'');
 
    if(cnpj == '') { 
      cnpj1.setCustomValidity("CNPJ inválido");
      return false;}
     
    if (cnpj.length != 14) {
       cnpj1.setCustomValidity("CNPJ inválido");
        return false;
    }
 
    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" || 
        cnpj == "11111111111111" || 
        cnpj == "22222222222222" || 
        cnpj == "33333333333333" || 
        cnpj == "44444444444444" || 
        cnpj == "55555555555555" || 
        cnpj == "66666666666666" || 
        cnpj == "77777777777777" || 
        cnpj == "88888888888888" || 
        cnpj == "99999999999999") {
        cnpj1.setCustomValidity("CNPJ inválido");
        return false;
        }
    // Valida DVs
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0,tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0)) {
      cnpj1.setCustomValidity("CNPJ inválido");
        return false;
    }
         
    tamanho = tamanho + 1;
    numeros = cnpj.substring(0,tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1)) {
          cnpj1.setCustomValidity("CNPJ inválido");
          return false;
    } 
    cnpj1.setCustomValidity("");
    return true;
    
}
