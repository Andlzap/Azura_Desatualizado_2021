


<?php

 

require_once "../php/valida_acesso.php";

if($_SESSION['perfil']=='Cliente') {
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
    <title>Procurar Serviços</title>

    
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
    <div class="container">
     <h4 class="center"> <a class="black-text" href="../pg/procurarServicos.php"> Procurar Serviços </a> </h4>

     <div class="row mTop4">
     
     


    
     <nav class="barraPesquisa fundoImagem mBottom5">
    <div class="nav-wrapper">
      <form method="post" enctype="multipart/form-data" action="../php/carregarPesquisa.php"> 
        <div class="input-field">
          <input class="barra fundoImagem white-text" id="search" type="search" placeholder="Pesquisar"  name="txtpesquisa">
          <label class="label-icon " for="search"><i class="material-icons white-text">search</i></label>
          <i class="material-icons white-text">close</i>
        </div>
      </form>
    </div>
  </nav>

    
    
        <?php

if(isset($_GET['pesquisa']) && ($_GET['pesquisa'] == '1'))
{ 
  require_once "../php/pesquisar.php";
  $tamanho = count($rows);
 } else {
  require_once "../php/carregarProcurarConsulta.php";
  $tamanho = 1;
 }




 if($tamanho>=1){
  foreach($rows as $usuario_consulta) {

    $usuario_foto = $usuario_consulta['ConsulFotoUsu'];
    $usuario_nome = $usuario_consulta['ConsulNomeUsu'];
    $usuario_sobrenome = $usuario_consulta['ConsulSobrenomeUsu'];
    $usuario_profissao = $usuario_consulta['ConsulProfissao'];
    $usuario_Sobre = $usuario_consulta['ConsulSobreUsu'];
    $usuario_cidade = $usuario_consulta['ConsulCidade'];
    $usuario_estado = $usuario_consulta['ConsulEstado'];
    $usuario_pessoa = $usuario_consulta['ConsulPessoa'];
   

    $consulta_id = $usuario_consulta['ConsulId'];
    $consulta_nome = $usuario_consulta['ConsulNome'];
    $consulta_sobre = $usuario_consulta['ConsulDescricao'];
    $consulta_problema = $usuario_consulta['ConsulProblema'];
    $consulta_status = $usuario_consulta['ConsulStatus'];
    $consulta_tag1 = $usuario_consulta['ConsulTag1'];
    $consulta_tag2 = $usuario_consulta['ConsulTag2'];
    $consulta_tag3 = $usuario_consulta['ConsulTag3'];


    if($usuario_pessoa == "Pessoa Física"){
      $nomePs = "Nome";

    } else {
      $nomePs = "Razão Social";
    }

    if($consulta_status == "Aberto"){
      $cor = "green-text";

    } else {
      $cor = "red-text";
    }
   
    echo
      
    '   
    <div class="col s12 m12 l12 xl6 ">
      <div class="card  sticky-action borderCard z-depth-2 quebrar">     
          
      <div class="input-field col s10 ">
      <div class="chip">'.$consulta_tag1.'</div>
      <div class="chip">'.$consulta_tag2.'</div>
      <div class="chip">'.$consulta_tag3.'</div>

      </div>
    
      <div class="input-field col s2 ">
      <a class="dropdown-trigger  black-text right" href="#" data-target="dropdown2"><i class="material-icons">more_vert</i></a>
      </div>
    
    <ul id="dropdown2" class="dropdown-content borderRad">
    <li class=""><a class="red-text" href="#!"> Reportar </a></li>
    </ul>

        <div class="card-content cardHover activator center formulario tooltipped" data-position="top" data-tooltip="Clique para mais informações!!!">
        <a class="black-text activator">
        <p class="activator tamNome"> '. $usuario_nome . " " .$usuario_sobrenome .'</p>   
        <h6 class="center activator ">'.$usuario_profissao.'</h6>  
        <h6 class="center activator "> ★★★★★ </h6>  
        <small class="activator"> 1000 Avaliações </small>
        <p class="activator"> ' . "<img class='circle mBottom1 activator  mTop1' src='../fotosP/".$usuario_foto."' height='100px' width='100px'>" . ' </p>
        <h5 class=" activator"> '. $consulta_nome .'</h5>       
        </div>
        </a>

      <div class="card-reveal">
      <span class="card-title  grey-text text-darken-4">' . $consulta_problema . '<i class="material-icons right">close</i></span>
      <p class="mTop2"> ' .$consulta_sobre. '</p>
      </div>

      <div class="card-tabs">
      <ul class="tabs">
        <li class=" btn grey lighten-3 botaoDescricao"><a class="active teal-text text-darken-3">Problema</a></li>
        <li class=" btn transparent botaoDescricao activator"><a class="activator teal-text text-darken-3">Descrição</a></li>
        <a class="modal-trigger teal-text text-darken-3" href="#'.$consulta_id.'3"><li class=" btn transparent botaoDescricao ">Detalhes</li></a>
      </ul>
    </div>
    <div class="card-content grey lighten-3">
      <div class="center"> <b>' . $consulta_problema . '</b></div>
  
      <div id="'.$consulta_id.'3"" class="modal">
    <div class="modal-content">
      <h4 class="center">Nº Consulta:</b> ' . $consulta_id . '</h4>
      <ul class="collapsible  mTop5 modalServicos">
    <li>
      <div class="collapsible-header coll1 collapCor"><i class="material-icons">person</i>Detalhes do cliente</div>

      <div class="collapsible-body coll2">
      <span><b>Nota: </b></span> <span>★★★★★</span> <br>
      <span><b>'.$nomePs.': </b></span> <span>' . $usuario_nome . " " .$usuario_sobrenome . '</span> <br>
      <span><b>Profissão: </b></span> <span>' .$usuario_profissao. '</span> <br>
      <span><b>Estado: </b></span> <span>' .$usuario_estado. '</span> <br>
      <span><b>Cidade: </b></span> <span>' .$usuario_cidade. '</span> <br>
      <span><b>Sobre: </b></span> <span>' .$usuario_Sobre. '</span> <br>
      <span><b>Pessoa: </b></span> <span>' .$usuario_pessoa. '</span> <br>
      <span><b>Avaliações: </b></span> <span> 0 avaliações</span> <br>
      

      </div>
    </li>
    <li>
      <div class="collapsible-header coll1 collapCor mTop3"><i class="material-icons">create</i>Detalhes da consulta</div>

      <div class="collapsible-body coll2">

      <span><b>Nº Consulta: </b></span> <span>' .$consulta_id. '</span> <br>
      <span><b>Nome da Consulta: </b></span> <span>' .$consulta_nome. '</span><br>
      <span><b>Problema: </b></span> <span>' .$consulta_problema. '</span><br>
      <span><b>Descrição: </b></span> <span>' .$consulta_sobre. '</span><br>
      <span><b>Status: </b></span> <span class="'.$cor.'"><b>' .$consulta_status. '</b></span><br>

      </div>
    </li>
    
  </ul>

    </div>
    <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-black btn-flat"><b>Fechar</b></a>
    </div>
  </div>

     
    </div>
        <div class="card-action center">
        <form method="post" enctype="multipart/form-data" action="../php/selecionarConsulta.php">
        <button name="botaoSubm" type="submit"  class="btn botao mTop1 mBottom1" value="'.$consulta_id.'">Selecionar</button>
        </form>
        
        </div>
      </div>
    </div>
    '     
  ;
}
 } else {
  echo 
  '<div class="col s12 mTop5 center">
     <h3> Nenhum resultado encontrado!!! </h3>
  </div>';
 }





 ?>
 

    </div>
    </div>

    </article>


















    <?php


include('../php/scripts.php');
    
?>





</body>
</html>