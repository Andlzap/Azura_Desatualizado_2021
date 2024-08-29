<?php
//require: caso gere um erro, não exibe a pagina home.php

require_once "../php/valida_acesso.php";

$_SESSION['autenticadoInfo'] = "nao";

if($_SESSION['perfil']=='Cliente') {
  header('Location:../pg/home.php');
}

require_once "../php/verNoti.php";
  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seus Serviços</title>

    
    <?php

include('../php/links.php');
    

?>


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
    <div class="container">
     <h4 class="center"> <a class="black-text" href="../pg/seusServicos.php"> Seus serviços </a> </h4>

     <div class="row mTop4">
     <div class="col s12" style="overflow-x:auto;">
    <table>
    <thead class="">
      <tr>
          <th>ID</th>
          <th>Nº Consulta</th>
          <th>Consulta</th>
          <th>Cliente</th>
          <th>Valor</th>
          <th>Prazo</th>
          <th>Status</th>

      </tr>
    </thead>
    <tbody>

     <?php
     require_once "../php/seusServicos.php";


     

     
        foreach($rows1 as $proposta){
    
        $idProposta = $proposta['idProp'];
        $valorProposta = $proposta['propValor'];
        $prazoProposta = $proposta['propPrazo'];
        $statusProposta = $proposta['statusProp'];
    
             
        $cliente_nome = $proposta['nomeCliente'];
        $consulta_id = $proposta['idPropConsulta'];
        $consulta_nome = $proposta['consultaNome'];

        
        

        if($statusProposta == "Não aceito") {
          $cor = "red-text";
        echo '
        <form method="post" action="../php/deletarProposta.php">
        <tr>
          <td> ' . $idProposta  . '</td>
          <td> ' . $consulta_id . ' </a> </td>
          <td> ' . $consulta_nome . '</td>
          <td> ' . $cliente_nome .  '</td>
          <td> R$ ' .  $valorProposta . '</td>
          <td> ' .  $prazoProposta . '</td>
          <td class="red-text"> <b>' .  $statusProposta . '</b></td>

          <td>
          <a class="btn transparent card1 modal-trigger" href="#modal001"><i class="material-icons red-text tooltipped" data-position="right" data-tooltip="Deletar">delete</i> </a> </td>

          <div id="modal001" class="modal">
         <div class="modal-content center">
           <h4 class="mBottom5">Realmente quer deletar?</h4>
           <hr>
  
        <a href="#!" class="modal-close waves-effect waves-dark grey white-text btn-flat mTop3"><b>Fechar</b></a>
        <button id="botao" type="submit" name="valorId" value="'.$idProposta.'" class="waves-effect red white-text waves-dark btn-flat mTop3"> <b> Deletar </b></button>
        </form>
        </div>
        </div>
        

        
          <td>
          <form method="post" action="../php/verServicos.php">
          <button class="btn transparent card1" name="btnInfo" value="'.$idProposta.'"><i class="material-icons blue-text tooltipped" data-position="right"
           data-tooltip="Informações">edit</i> </button> </td>
           </form>
          </tr>
          
        ' ;

        } else if($statusProposta == "Aceito") {
          $cor = "blue-text";
          echo '
        
        <tr>
          <td> ' . $idProposta  . '</td>
          <td> ' . $consulta_id . ' </a> </td>
          <td> ' . $consulta_nome . '</td>
          <td> ' . $cliente_nome .  '</td>
          <td> R$ ' .  $valorProposta . '</td>
          <td> ' .  $prazoProposta . '</td>
          <td class="'.$cor.'"> <b>' .  $statusProposta . '</b></td>

        
          <td>
          <form method="post" action="../php/verServicos.php">
          <button class="btn transparent card1" name="btnInfo" value="'.$idProposta.'"><i class="material-icons blue-text tooltipped" data-position="right"
           data-tooltip="Informações">edit</i> </button> 
          </td>
           </form>

           <td>
          <form method="post" action="../pg/contatos.php">
          <button class="btn transparent card1" name="btnInfo" value="'.$idProposta.'"><i class="material-icons green-text tooltipped" data-position="right"
           data-tooltip="Bate Papo">chat</i> </button> 
          </td>
           </form>
          </tr>
          
        ' ;
        }
       
     }
    
     ?>

    </tbody>
    </table> 
    </div>
    </div>
    </div>
    </div>
    </div>

    </article>






    
    <?php


include('../php/scripts.php');
    
?>




</body>
</html>