<?php
//require: caso gere um erro, não exibe a pagina home.php

require_once "../php/valida_acesso.php";

$_SESSION['autenticadoInfo2'] = "nao";

if($_SESSION['perfil']=='Técnico') {
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
    <title>Suas consultas</title>

    
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
    <div class="container center">
     <h4> Suas consultas </h4>
     <div class="card borderCard   mTop5">
       <div class="card-content ">
     <div class="row mTop4">
    <div class="col s12" style="overflow-x:auto;">
    <table>
    <thead>
      <tr>
          <th>ID</th>
          <th>NOME</th>
          <th>PROBLEMA</th>
          <th>STATUS</th>
      </tr>
    </thead>
    <tbody>

    
        <?php





require_once "../php/carregarConsulta.php";


foreach($rows as $usuario_consulta) {

    
    $usuario_nome = $usuario_consulta['ConsulNomeUsu'];
    $usuario_sobrenome = $usuario_consulta['ConsulSobrenomeUsu'];

    $consulta_id = $usuario_consulta['ConsulId'];
    $consulta_nome = $usuario_consulta['ConsulNome'];
    $consulta_problema = $usuario_consulta['ConsulProblema'];
    $consulta_status = $usuario_consulta['ConsulStatus'];


    if($consulta_status == "Aberto") {
    $cor = "green-text";
    } else if($consulta_status == "Em andamento"){
    $cor = "blue-text";
    }


    if($consulta_status == "Aberto") {

    echo
    
    '

    <form method="post" action="../php/deletarConsulta.php">
      <tr>
        <td> ' . $consulta_id  . '</td>
        <td> ' . $consulta_nome . ' </td>
        <td> ' . $consulta_problema . '</td>
        
        <td class="'.$cor.'"> <b>' . $consulta_status . '</b></td> 
        <td> 
        
        <a class="btn transparent card1 modal-trigger" href="#modal001"><i class="material-icons red-text tooltipped" data-position="right" data-tooltip="Deletar">delete</i> </a> </td>
     

      <div id="modal001" class="modal">
       <div class="modal-content center">
         <h4 class="mBottom5">Realmente quer deletar?</h4>
         <hr>

      <a href="#!" class="modal-close waves-effect waves-dark grey white-text btn-flat mTop3"><b>Fechar</b></a>
      <button id="botao" type="submit" name="valorId" value="'.$consulta_id.'" class="waves-effect red white-text waves-dark btn-flat mTop3"> <b> Deletar </b></button>
      </form>

      <td>
      <form method="post" action="../php/verConsultas.php">
      <button class="btn transparent card1" name="btnInfo" value="'.$consulta_id.'"><i class="material-icons blue-text tooltipped" data-position="right"
       data-tooltip="Informações">edit</i> </button> </td>
       </form>
      </tr>
      </div>
      </div>
    
    ';

    } else if($consulta_status == "Em andamento"){   
      echo 
    '

   
      <tr>
        <td> ' . $consulta_id  . '</td>
        <td> ' . $consulta_nome . ' </td>
        <td> ' . $consulta_problema . '</td>
        
        <td class="'.$cor.'"> <b>' . $consulta_status . '</b></td> 
        

      <td>
      <form method="post" action="../php/verConsultas.php">
      <button class="btn transparent card1" name="btnInfo" value="'.$consulta_id.'"><i class="material-icons blue-text tooltipped" data-position="right"
       data-tooltip="Informações">edit</i> </button> </td>
       </form>

       <td>
        <form method="post" action="../pg/contatos.php">
        <button class="btn transparent card1" name="btnInfo" value="'.$consulta_id.'"><i class="material-icons green-text tooltipped" data-position="right"
        data-tooltip="Bate Papo">chat</i> </button> 
        </td>
        </form>
      </tr>
      </div>
      </div>
    
    ';
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