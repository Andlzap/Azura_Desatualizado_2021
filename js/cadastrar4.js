var botao = document.querySelector("#botao");
var cpf = document.querySelector("#cpf");
var titulo = document.querySelector("#tituloLog");
var nivelCli = document.querySelector("#nivelCli");
var nivelTec = document.querySelector("#nivelTec");
var form = document.querySelector("#form1");
var form2 = document.querySelector("#form2");
var form3 = document.querySelector("#form3");
var form4 = document.querySelector("#form4");
var nivel = document.querySelector('#nivel');



botao.style.cssText = `height:0px;
width:0px;
display: none;
padding:0px;
margin:0px;
`;

form1.style.cssText = `height:0px;
width:0px;
display: none;
padding:0px;
margin:0px;
`;

form3.style.cssText = `height:0px;
width:0px;
display: none;
padding:0px;
margin:0px;
`;


cep = document.querySelector("#cep");




function insert1() {
  nascimento();

}



function cliente() {
  document.getElementById("formulario").reset();
  titulo.innerHTML = "<h5 class='suave'> Cliente </h5>";
  nivelCli.blur();
  nivel.value = "Cliente";
  document.querySelector("#nivelC").classList.add("active");
  form1.style.cssText = `display: inline;`;
  form2.innerHTML = "";
  botao.style.cssText = `
    display: none;
    `;
  botao.disabled = true;

  form3.style.cssText = `height:0px;
    width:0px;
    display: none;
    padding:0px;
    margin:0px;
    `;

  form4.innerHTML = ``;


}


function tecnico() {
  document.getElementById("formulario").reset();
  titulo.innerHTML = "<h5 class='suave'> Técnico </h5>";
  nivelTec.blur();
  nivel.value = "Técnico";
  document.querySelector("#nivelC").classList.add("active");
  form1.style.cssText = "display: inline;";
  form2.innerHTML = "";
  botao.style.cssText = `
    display: none;
    `;
  botao.disabled = true;

  form3.style.cssText = `height:0px;
    width:0px;
    display: none;
    padding:0px;
    margin:0px;
    `;

  form4.innerHTML = ``;

}





function formulario() {



  botao.style.cssText = `
display: inline;
`;

  botao.disabled = false;

  $(document).ready(function () {
    var $cpf = $("#cpfcnpj");
    $cpf.mask('000.000.000-00', { reverse: true });
    $("#cep").mask("99.999-999");
    $("#cnpj").mask("99.999.999/9999-99");
  });



  pessoaF = document.querySelector("#group1");
  pessoaJ = document.querySelector("#group2");

  if (pessoaF.checked) {

    form2.innerHTML = `

  <div class="suave">

    <div class="file-field input-field col s12 mTop5">
    <div class="btn btn-small botao">
    <span>Foto de Perfil</span>
    <input type="file" id="imagem" name="imagem">
    </div>
    <div class="file-path-wrapper">
     <input class="file-path validate" name="imagem" type="text">
    </div>
    </div>

    <div class="input-field col s12 m6 ">
    <input id="nome" type="text" name="txtnome" class="" pattern="^[^-\s][a-zA-ZÀ-ú ]*" minlength="2" maxlength="20"  required>
    <label for="nome">Nome</label>
    </div>
  
  <div class="input-field col s12 m6">
    <input id="sobrenome" type="text" name="txtsobrenome" class="" pattern="^[^-\s][a-zA-ZÀ-ú ]*" minlength="2" maxlength="30"required>
    <label for="sobrenome">Sobrenome</label>
  </div>
   
  <div class="input-field col s12 m6">
    <input type="date" id="date" class="" name="txtdata"  required>
    <label for="data">Data de nascimento</label>
  </div>

  <div class="input-field col s12 m6">
  <input type="text" id="profissao" name="txtprofissao" maxlenght="50" required/>
  <label id="profissao" for="profissao">Profissão</label>
  </div>
  
  <div class="input-field col s12 m6">
    <input type="text" id="cpfcnpj" name="txtcpfcnpj" onchange="validaCpf()" required />
    <label for="cpf">CPF</label>
  </div>

  <div class="input-field col s12 m6">
  <input type="text" id="cep" name="txtcep" placeholder="O CEP gerará as informações automaticamente" required />
  <label class="active" for="cep">CEP</label>
  </div>

  <div class="input-field col s12 m6">
    <input type="text" id="uf" name="txtuf" readonly required />
    <label id="estado1" for="uf">Estado</label>
  </div>

  <div class="input-field col s12 m6">
    <input type="text" id="cidade" name="txtcidade" readonly required />
    <label id="cidade1" for="cidade">Cidade</label>
  </div>

  <div class="input-field col s12 m6">
    <input type="text" id="bairro" name="txtbairro" readonly required />
    <label id="bairro1" for="bairro">Bairro</label>
  </div>

  <div class="input-field col s12 m6">
    <input type="text" id="logradouro" name="txtlogradouro" readonly required />
    <label id="logradouro1" for="logradouro">Endereço</label>
  </div>

  <div class="input-field col s12 m6">
    <input type="text" id="complemento" name="txtcomplemento" readonly />
    <label id="complemento1" for="complemento">Complemento</label>
  </div>

  <div class="input-field col s12 m6">
    <input type="text" id="numero" name="txtnumero" maxlength="10" required/>
    <label id="numero1" for="numero">Número</label>
  </div>
  
  <div class="input-field col s12 m6">
    <input id="email" name="txtemail" type="email" class="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
    <label for="email">Email</label>
  </div>
  
  <div class="input-field col s12 m6">
    <input id="confirmeemail" name="txtconfirmeemail" type="email" class="" required>
    <label for="confirmeemail">Confirme E-mail</label>
  </div>
  
  <div class="input-field col s12 m6">
    <input id="senha" type="password" name="txtsenha" class="" minlength="8" maxlength="20" data-length="20" placeholder="Deve ter entre 8 e 20 caracteres" required>
    <label class="active" for="senha">Senha</label>
  </div>
  
  <div class="input-field col s12 m6">
    <input id="confirmesenha" type="password" name="txtconfirmesenha" class="" minlength="8" maxlength="20" data-length="20" required>
    <label for="confirmesenha">Confirme Senha</label>
  </div>
  </div>

  </div>
  `;


    form3.style.cssText = `height:0px;
  width:0px;
  display: inline;
  padding:0px;
  margin:0px;
  `;

    form4.innerHTML = `
  <div class="input-field col s12 m6 offset-m3 mTop2">
  <p>
  <label>
    <input type="checkbox" required />
    <span>Aceito e concordo com os <a href="#modal1" class="modal-trigger"> Termos e condições </a></span>
  </label>
  </p>
  </div>
  
  `;

    cep = document.querySelector("#cep");
    cep.addEventListener('focusout', insert)

  }

  if (pessoaJ.checked) {

    form2.innerHTML = `

    <div class="suave">

    <div class="file-field input-field col s12 mTop5">
    <div class="btn btn-small botao">
    <span>Foto de Perfil</span>
    <input type="file" id="imagem" name="imagem">
    </div>
    <div class="file-path-wrapper">
     <input class="file-path validate" name="imagem" type="text">
    </div>
    </div>


    <div class="input-field col s12 m6 ">
    <input id="nome" type="text" name="txtnome" class="" pattern="^[^-\s][a-zA-ZÀ-ú ]*" minlength="2" maxlength="50"  required>
    <label for="nome">Razão Social</label>
  </div>
  

  <div class="input-field col s12 m6 ">
    <input type="date" id="date1" class="" name="txtdata" maxlength="70" required>
    <label for="data">Data de fundação</label>
  </div>

  <div class="input-field col s12 m6">
  <input type="text" id="profissao" name="txtprofissao" maxlenght="50" required/>
  <label id="profissao" for="profissao">Ramo de atuação</label>
  </div>
  
  <div class="input-field col s12 m6">
    <input type="text" id="cnpj" name="txtcpfcnpj" onchange="validarCNPJ()" required />
    <label for="cnpj">CNPJ</label>
  </div>

  <div class="input-field col s12 m6">
  <input type="text" id="cep" name="txtcep" placeholder="O CEP gerará as informações automaticamente" required />
  <label class="active" for="cep">CEP</label>
  </div>

  <div class="input-field col s12 m6">
    <input type="text" id="uf" name="txtuf" readonly required />
    <label id="estado1" for="uf">Estado</label>
  </div>

  <div class="input-field col s12 m6">
    <input type="text" id="cidade" name="txtcidade" readonly required />
    <label id="cidade1" for="cidade">Cidade</label>
  </div>

  <div class="input-field col s12 m6">
    <input type="text" id="bairro" name="txtbairro" readonly required />
    <label id="bairro1" for="bairro">Bairro</label>
  </div>

  <div class="input-field col s12 m6">
    <input type="text" id="logradouro" name="txtlogradouro" readonly required />
    <label id="logradouro1" for="logradouro">Endereço</label>
  </div>

  <div class="input-field col s12 m6">
    <input type="text" id="complemento" name="txtcomplemento" readonly />
    <label id="complemento1" for="complemento">Complemento</label>
  </div>

  <div class="input-field col s12 m6">
    <input type="text" id="numero" name="txtnumero" required/>
    <label id="numero1" for="numero">Número</label>
  </div>
  
  <div class="input-field col s12 m6">
    <input id="email" name="txtemail" type="email" class="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
    <label for="email">Email</label>
  </div>
  
  <div class="input-field col s12 m6">
    <input id="confirmeemail" name="txtconfirmeemail" type="email" class="" required>
    <label for="confirmeemail">Confirme E-mail</label>
  </div>
  
  <div class="input-field col s12 m6">
    <input id="senha" type="password" name="txtsenha" class="" minlength="8" maxlength="20" data-length="20" placeholder="Deve ter entre 8 e 20 caracteres" required>
    <label class="active" for="senha">Senha</label>
  </div>
  
  <div class="input-field col s12 m6">
    <input id="confirmesenha" type="password" name="txtconfirmesenha" class="" minlength="8" maxlength="20" data-length="20" required>
    <label for="confirmesenha">Confirme Senha</label>
  </div>
  </div>

  </div>
  `;

    form3.style.cssText = `height:0px;
width:0px;
display: inline;
padding:0px;
margin:0px;
`;
    form4.innerHTML = `<div class="input-field col s12 m6 offset-m3 mTop2">
<p>
  <label>
    <input type="checkbox" required />
    <span>Aceito e concordo com os <a href="#modal1" class="modal-trigger"> Termos e condições </a></span>
  </label>
</p>
</div>

`;
    cep = document.querySelector("#cep");
    cep.addEventListener('focusout', insert)
  }





}




function nascimento() {


  var data = document.querySelector("#date");
  var anoNascimento = data.value.substring(0, 4)

  var dataAtual = new Date();
  var anoAtual = dataAtual.getFullYear();


  if (data.value == "") {
    data.setCustomValidity("");
  } else {


    var idade = anoAtual - anoNascimento;



    if (anoNascimento < anoAtual && idade >= 16) {
      data.setCustomValidity("");

    } else {

      data.setCustomValidity("O usuario deve ter 16 anos ou mais");
    }

  }


}


function insert() {
  var cep = document.querySelector("#cep").value; // Supondo que você tenha um input com id="cep"
  var cep1 = cep.replace(/\D/g, ''); // Remove qualquer caractere não numérico
  console.log(cep1);

  $.ajax({
    url: 'https://viacep.com.br/ws/' + cep1 + '/json/',
    dataType: 'json',
    success: function (resposta) {
      // Exibir os campos quando a resposta for recebida
      document.querySelector("#estado1").classList.add("active");
      document.querySelector("#cidade1").classList.add("active");
      document.querySelector("#bairro1").classList.add("active");
      document.querySelector("#logradouro1").classList.add("active");
      document.querySelector("#complemento1").classList.add("active");
      document.querySelector("#numero1").classList.add("active");

      // Atualizar campos com base na resposta
      $("#logradouro").val(resposta.logradouro || "");
      $("#complemento").val(resposta.complemento || "");
      $("#bairro").val(resposta.bairro || "");
      $("#cidade").val(resposta.localidade || "");
      $("#uf").val(getEstadoFullName(resposta.uf) || "");

      // Definir campos como readOnly ou não
      $("#logradouro").prop('readonly', !!resposta.logradouro);
      $("#cidade").prop('readonly', !!resposta.localidade);
      $("#bairro").prop('readonly', !!resposta.bairro);
      $("#complemento").prop('readonly', !!resposta.complemento);
      $("#uf").prop('readonly', !!resposta.uf);

      $("#numero").focus();
    },
    error: function () {
      console.error('Não foi possível obter os dados do CEP.');
    }
  });
}

// Função para obter o nome completo do estado
function getEstadoFullName(uf) {
  const estados = {
    "AC": "Acre",
    "AL": "Alagoas",
    "AP": "Amapá",
    "AM": "Amazonas",
    "BA": "Bahia",
    "CE": "Ceará",
    "DF": "Distrito Federal",
    "ES": "Espirito Santo",
    "MA": "Maranhão",
    "MS": "Mato Grosso do Sul",
    "MT": "Mato Grosso",
    "MG": "Minas Gerais",
    "PA": "Pará",
    "PB": "Paraíba",
    "PR": "Paraná",
    "PE": "Pernambuco",
    "PI": "Piauí",
    "RJ": "Rio de Janeiro",
    "RN": "Rio Grande do Norte",
    "RS": "Rio Grande do Sul",
    "RO": "Rondônia",
    "RR": "Roraima",
    "SC": "Santa Catarina",
    "SP": "São Paulo",
    "SE": "Sergipe",
    "TO": "Tocantins"
  };
  return estados[uf] || "";
}







nivelCli.addEventListener('click', cliente);
nivelTec.addEventListener('click', tecnico);

botao.addEventListener("click", insert1);

