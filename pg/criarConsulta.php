
<?php
//require: caso gere um erro, não exibe a pagina home.php

require_once "../php/valida_acesso.php";

if($_SESSION['perfil']=='Técnico') {
  header('Location:../pg/home.php');
}

$_SESSION['autenticadoInfo'] = "nao";
  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar consulta</title>

    
    <?php

include('../php/links.php');
    
?>


</head>

<body>

  <header class="fundoImagem">
    <nav class="navBarra z-depth-5 suave">
        
    <div class="container-fluid">
      
          <?php
          include('../php/logo2.php');
          ?>  
    
      </nav>

   
    
    </header>


    



<?php include "../php/ferramentas.php"; ?>


<article class="mTop5 suave">

<div class="container center">

<h4> Criar consulta </h4>

<div class="row mTop5">
  
<div class="card borderCard ">
<div class="card-content ">

    
        

        <form method="post" action="../php/consulta.php"> 

        
        <div class="input-field col s12 mTop5">
        <input id="nomeProblema" type="text" name="txtnomeConsulta" class=""  minlength="2" maxlength="30" data-length="30" required>
         <label for="nomeProblema">Qual seu projeto/problema</label>
        </div>

        <div class="input-field col s12">
    <textarea id="descricao" type="text" name="txtdescricao"  class="materialize-textarea" minlength="2" maxlength="1500" data-length="1500" required></textarea>
    <label for="descricao"> Descrição </label>
</div>

<div class="input-field col s12" >
<select name="txtespec" id="select" required>
<option value="" disabled selected>Escolha uma opção</option>
<option value="Design gráfico">Design gráfico</option>
<option value="Criação de banco de dados">Criação de banco de dados</option>
<option value="Web Design">Web Design</option>
<option value="Concerto de computador">Concerto de computador</option>
<option value="Concerto de periféricos">Concerto de periféricos</option>
<option value="Programação de site">Programação de site</option>
<option value="Programação de aplicativo mobile">Programação de aplicativo mobile</option>
<option value=1>Outros</option>




</select>
<label> <b> Alguma opção se encaixa no seu problema? </b> </label>
</div>


            
<div id="formOutro">
        
</div>

<div class="col s12">
<div class="">
  <p class="left"> <b> Palavras chave (Opcional):  </b> </p> <br>
</div>
</div>

  <div class="input-field col s12 m4">
    <input placeholder="Palavra chave 1" name="txtTag1" maxlength="12">
  </div>
  <div class="input-field col s12 m4">
    <input placeholder="Palavra chave 2" name="txtTag2" maxlength="12">
  </div>
  <div class="input-field col s12 m4">
    <input placeholder="Palavra chave 3" name="txtTag3" maxlength="12">
  </div>
</div>


        
        <?php
          if(isset($_GET['consulta']) && ($_GET['consulta'] == 'erro1'))
          { ?>
            <div id="mensagem" class="mensagemPa">
            Preencha todos os campos!!!
            </div>

        <?php } ?>


<button id="botao1" type="submit"  name="action" class="btn waves-effect waves-light botao mTop4 mBottom5" >Criar Consulta</button>

        </form>
               </div>  
          </div>
    </div>
</div>

</article>






<script src="../js/outro1.js"></script>

<?php


include('../php/scripts.php');
    
?>




</body>
</html>
