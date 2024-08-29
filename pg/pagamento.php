<?php
//require: caso gere um erro, não exibe a pagina home.php


require_once "../php/valida_acesso.php";

if($_SESSION['perfil']=='Técnico') {
  header('Location:../pg/home.php');
}

require_once "../php/valida_acessoInfo2.php";
require_once "../php/valida_acessoPagamento.php";

  ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efetuar Pagamento</title>

    
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



    <action>
    <div class="container mPadTop3 ">

<div class="row">

  <div class="col s12 m1 l2 xl3"></div>
  <div class="col s12 m10 l8 xl6">

    <div class="card borderCard ">
      <div class="card-content center formulario">

        <h4 class="mTop5 mBottom4 center"> Efetuar pagamento</h4>




        <form method="post" action="../php/valida_login.php">

          <div class="row ">
            <div class="col s12">


             


              </div>
                </div>

                <div class="center">
                  <button id="botao" type="submit" class="btn waves-effect waves-light botao">Pagar</button>
                </div>

               

              </form>
            </div>
          </div>

        </div>

      </div>
    </div>
    </action>








<?php


include('../php/scripts.php');
    
?>




</body>
</html>
