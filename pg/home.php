
<?php
//require: caso gere um erro, não exibe a pagina home.php

require_once "../php/valida_acesso.php";
$_SESSION['autenticadoInfo2'] = "nao";

  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    
    <?php

include('../php/links.php');
    
?>


</head>

<body class="">

<?php
if (isset($_GET['consulta']) && ($_GET['consulta'] == 'criada')) { ?>

  <div id="modal88" class="modal center">
    <div class="modal-content">
      <h4>Consulta criada com sucesso</h4>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat">Fechar</a>
    </div>
  </div>

<?php } ?>

  <header class="fundoImagem">
    <nav class="navBarra z-depth-5 suave">
        
    <div class="container-fluid">
          <?php
          include('../php/logo2.php');
          ?>

      </nav>

   
    
    </header>


    



<?php include "../php/ferramentas.php"; ?>
      




<article>



<div class="container suave mTop5"> 
  <div class="row  center">
    
  <div class="col s12 m6">
      <div class="card transparent card1">
        <div class="card-content ">

        <?php if($_SESSION['perfil'] == "Técnico") {?>
        <i class="iTam material-icons">storage</i>
          <span class="card-title"><b>Seus Serviços</b></span>
          <p>Clique para ver os seus serviços, assim como as informações de cada um deles.</p>
        </div>
        
        <a href="seusServicos.php" class="btn waves-effect waves-light botao mTop4 ">Seus serviços</a>
        
        <?php } else if($_SESSION['perfil'] == "Cliente") { ?>

          <i class="iTam material-icons">chat_bubble_outline</i>
          <span class="card-title"><b>Suas consultas</b></span>
          <p>Clique para ver as suas consultas, assim como as informações de cada uma delas.</p>
        </div>
        
        <a href="suasConsultas.php" class="btn waves-effect waves-light botao mTop4 ">Suas consultas</a>

        <?php }  ?>
      </div>
    </div>


    <div class="col s12 m6">
      <div class="card transparent card1">
        <div class="card-content ">
        <i class="iTam material-icons">person</i>
        <span class="card-title"><b>Perfil</b></span>
          <p>Entre e veja as especificações do seu perfil, também como modifique a sua biografia!</p>
        </div>
        
        <a href="editarPerfil.php" name="action" class="btn waves-effect waves-light botao mTop4 ">Ver perfil</a>
        

      </div>
    </div>
    
  
      <div class="col s12 mTop2">
        
      <div class="card transparent card1">
        <div class="card-content ">
        <?php if($_SESSION['perfil'] == "Técnico") {?>

        <i class="iTam material-icons">search</i>
        <span class="card-title"><b>Procurar Serviços</b></span>
          <p>Procure por serviços de clientes da sua região, lembre-se de optar por serviços especializados em sua área</p>
        </div>
        
        <a href="procurarServicos.php" class="btn waves-effect waves-light botao mTop4 ">Procurar serviços</a>
        
        <?php } else if($_SESSION['perfil'] == "Cliente") { ?>

          <i class="iTam material-icons">create</i>
        <span class="card-title"><b>Criar consulta</b></span>
          <p>Procure por serviços de clientes da sua região, lembre-se de optar por serviços especializados em sua área</p>
        </div>
        
        <a href="criarConsulta.php" class="btn waves-effect waves-light botao mTop4 ">Criar consulta</a>

        <?php }  ?>


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
