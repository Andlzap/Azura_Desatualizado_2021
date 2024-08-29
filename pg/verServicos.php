<?php


require_once "../php/valida_acesso.php";


if($_SESSION['perfil']=='Cliente') {
  header('Location:../pg/home.php');
}


require_once "../php/valida_acessoInfo.php";



  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Serviços</title>

    
<?php
include('../php/links.php');
?>


</head>

<body class="suave">

  <header class="fundoImagem">
    <nav class="navBarra z-depth-5">
        
    <div class="container-fluid">
      
          <?php
          include('../php/logo2.php');
          ?>
            
      </nav>

   
    
    </header>


    <?php include "../php/ferramentas.php"; ?>



    <article class="mTop5">
    <div class="container-fluid mLeft5 mRight5 cMarginTop"> 
  <div class="row ">

 

  <div class="card borderCard ">
<div class="card-content ">

<h4 class="center">  <?php echo "Numero da consulta: " . $_SESSION['consulId2'];  ?> </h4>
<h5 class="center">  <?php echo  $_SESSION['consulProblema2'];  ?> </h5>


      <div class="row mTop5">

      <div class = "col s12 center">
      <?php echo "<img class='circle' src='../fotosP/".$_SESSION['usuFoto2']."' height='100px' width='100px'>"; ?>
      </div>

      
      <div class = "col s12 m8">

      <div class = "col s12 mBottom4">
      <h5 class="left"> Informações do usuário: </h5> 
      </div>

     <?php if($_SESSION['usuPessoa2'] == "Pessoa Física") {?>
      <div class="input-field col s12 m6 ">
            <input id="nome" type="text" name="txtnome"  readonly required 
            value="<?php echo $_SESSION['usuNome2'] . " " . $_SESSION['usuSobrenome2'] ?>"> 
            <label for="nome"> <b> Usuario </b> </label>
      </div>

       <?php } else {?>

        <div class="input-field col s12 m6 ">
            <input id="razao" type="text" name="txtnome" class="validate" pattern="^[^-\s][a-zA-ZÀ-ú ]*" minlength="2"  maxlength="30" data-length="30" readonly required 
            value="<?php echo $_SESSION['usuNome2'] ?>"> 
            <label for="razao"> <b> Razão social </b> </label>
      </div>
      <?php } ?>

      <?php if($_SESSION['usuPessoa2'] == "Pessoa Física"){?>
  <div class="input-field col s12 m6">
    <input type="text" id="profissao" name="txtprofissao" value=" <?php echo $_SESSION['usuProfissao2']; ?>" readonly required />
    <label for="profissao"> <b> Profissão </b> </label>
  </div>

  <?php } else {?>

    <div class="input-field col s12 m6">
    <input type="text" id="profissao" name="txtprofissao" value=" <?php echo $_SESSION['usuProfissao2']; ?>" readonly required />
    <label for="profissao"> <b> Ramo de atuação </b> </label>
  </div>

   <?php } ?>

      <div class="input-field col s12 m4">
            <input id="sobre" type="text" name="txtsobre"  readonly required 
            value="<?php echo $_SESSION['usuSobre2'] ?>"> 
            <label for="sobre"> <b> Sobre </b> </label>
      </div>

      <div class="input-field col s12 m4">
            <input id="pessoa" type="text" name="txtpessoa"  readonly required 
            value="<?php echo $_SESSION['usuPessoa2'] ?>"> 
            <label for="pessoa"> <b> Pessoa </b> </label>
      </div>

      <div class="input-field col s12 m4">
            <input id="estado" type="text" name="txtestado"  readonly required 
            value="<?php echo $_SESSION['usuEstado2'] ?>"> 
            <label for="estado"> <b> Estado </b> </label>
      </div>

      <div class="input-field col s12 m4">
            <input id="cidade" type="text" name="txtcidade"  readonly required 
            value="<?php echo $_SESSION['usuCidade2'] ?>"> 
            <label for="cidade"> <b> Cidade </b> </label>
      </div>

      <div class = "col s12 mBottom4">
      <h5 class="left"> Informações da consulta: </h5> 
      </div>

      <div class="input-field col s12 m4">
            <input id="idconsulta" type="text" name="txtidConsulta"  readonly required 
            value="<?php echo $_SESSION['consulId2'] ?>"> 
            <label for="idconsulta"> <b> Nº Consulta </b> </label>
      </div>

      <div class="input-field col s12 m4">
            <input id="nomeConsulta" type="text" name="txtnomeConsulta"  readonly required 
            value="<?php echo $_SESSION['consulNome2'] ?>"> 
            <label for="nomeConsulta"> <b> Nome consulta </b> </label>
      </div>

      <div class="input-field col s12 m4">
            <input id="problemaConsulta" type="text" name="txtproblemaConsulta"  readonly required 
            value="<?php echo $_SESSION['consulProblema2'] ?>"> 
            <label for="problemaConsulta"> <b> Problema </b> </label>
      </div>

      <div class="input-field col s12" >
            <textarea id="descConsulta" type="text" name="txtdescConsulta" style="overflow-y:auto;"  class="materialize-textarea" readonly required><?php echo $_SESSION['consulSobre2']?></textarea>
            <label for="descConsulta"> <b> Descrição </b> </label>
      </div>

      
      <div class="input-field col s12 m4">
            <input id="tag1Consulta" type="text" name="txttag1Consulta"  readonly required 
            value="<?php echo $_SESSION['consulTag1_2'] ?>"> 
            <label for="tag1Consulta"> <b> Tag1 </b> </label>
      </div>

      <div class="input-field col s12 m4">
            <input id="tag2Consulta" type="text" name="txttag2Consulta"  readonly required 
            value="<?php echo $_SESSION['consulTag2_2'] ?>"> 
            <label for="tag2Consulta"> <b> Tag2 </b> </label>
      </div>

      <div class="input-field col s12 m4">
            <input id="tag3Consulta" type="text" name="txttag3Consulta"  readonly required 
            value="<?php echo $_SESSION['consulTag3_2'] ?>"> 
            <label for="tag3Consulta"> <b> Tag3 </b> </label>
      </div>

      <?php if($_SESSION['consulStatus2'] == "Em andamento") {
            $cor = 'blue-text';
      } else if($_SESSION['consulStatus2'] == "Aberto"){
            $cor = 'green-text';
      } ?>
      <div class="input-field col s12 m4">
            <input id="statusConsulta" class="<?php echo $cor;?>" style="font-weight: bold;" type="text" name="txtstatusConsulta"  readonly required 
            value="<?php echo $_SESSION['consulStatus2'] ?>"> 
            <label for="statusConsulta"> <b> Status </b> </label>
      </div>

     </div>


     
    
     
     <div class="col s12 m4">
     <div class="card borderCard">
     <div class="card-content center">


    
     <h5 class="mBottom3"> Sua Proposta: </h5>

    

    <div class="input-field mTop3">
    <input id="valorProposta1"   type="text" name="txtvalorProposta" value="<?php echo $_SESSION['valorProposta'] ?>" readonly  required> 
    <label for="valorProposta1"> <b> Valor a ser cobrado </b> </label>
    </div>

    <div class="input-field mTop3">
          <textarea id="textarea1" class="materialize-textarea" name="txtProposta" style="overflow-y:auto;" readonly  required><?php echo $_SESSION['descricaoProposta'] ?></textarea>
          <label for="textarea1"> <b> Descrição da sua proposta </b> </label>
   </div>

    <div class="input-field mTop3 ">
    <input id="dataProposta" type="date" name="txtdataProposta" value="<?php echo $_SESSION['dataProposta'] ?>" readonly required >
    <label for="dataProposta"> <b> Data da proposta </b> </label>
    </div>

    <div class="input-field mTop3 ">
    <input id="prazoProposta" type="date" name="txtprazoProposta" value="<?php echo $_SESSION['prazoProposta'] ?>" readonly  required >
    <label for="prazoProposta"> <b> Prazo </b> </label>
    </div>

    <div class="input-field mTop3 ">
    <input id="statusProposta" class="<?php echo $_SESSION['cor'] ?>" style="font-weight: bold;" type="text" name="txtstatusProposta" value="<?php echo $_SESSION['statusProposta'] ?>" readonly  required >
    <label for="statusProposta"> <b>Status</b> </label>
    </div>

    <div class="input-field mTop3 ">
    <input id="pagamentoProposta" class="<?php echo $_SESSION['cor1'] ?>" style="font-weight: bold;" type="text" name="txtpagamentoProposta" 
    value="<?php echo $_SESSION['pagamentoProposta'] ?>" readonly  required >
    <label for="pagamentoProposta"> <b>Pagamento</b> </label>
    </div>
 
    
     <?php if($_SESSION['statusProposta'] == "Aceito") {?>
      <a href="../pg/contato.php"  id="botaoBatePapo" name="btnBatePapo" class="btn waves-effect waves-light botao modal-trigger" >Bate papo</a>
      <?php }?>

    </form>
    </div>
    </div>
    
    </div>
    


   
     
       
  

    

      </div>
    </div>
  </div>
</div>


    </article>

    

   

    

   
    </div>
    </div>

    </article>




    





     











<?php
include('../php/scripts.php');
?>



</body>
</html>