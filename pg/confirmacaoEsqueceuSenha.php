<?php

require_once "../php/valida_acessoEsquecerSenha.php";


  ?>



<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmacao</title>

    <?php

include('../php/links.php');
    
?>

    
    
    

</head>
<body class="bodyCol suave">

<header>
<nav class="transparent z-depth-4 ">
    
<div class="container-fluid ">
  
<div class="col s3 m6 l8">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a class="btn waves-effect borderButton modal-trigger btn-flat" href="login.php">Logar</a></li>
                </ul>
              </div>

              <?php
             include('../php/logo.php');
            ?>
    
  </div>
</div>

  

  <ul class="sidenav" id="mobile-demo">
  <li><a href="index.php">Página Inicial</a></li>
  </ul>

  </nav>

</header>


<div class="container mPadTop3 ">

       <div class="row">
    
        <div class="col s12 m1 l2 xl3"></div>
       <div class="col s12 m10 l8 xl6">

       <div class="card borderCard z-depth-5 cardFundo">
       <div class="card-content center formulario">

  <h4 class="mTop5 mBottom5 center"> Esqueceu senha </h4>
  
  <p class="center grey-text text-darken-2"> Foi enviado um código de verificação para seu email, caso esse email seja válido
       o código enviado deverá ser colocado abaixo para concluir a mudança de senha.</p>

<br>

  <form  method="post" action="../php/confirmaMudarSenha.php" > 

<div class="row ">
  <div class="col s12">
  
         <?php
          if(isset($_GET['confirmacao']) && ($_GET['confirmacao'] == 'erro1'))
          { ?>
            <div id="mensagem" class="mensagemPa">
            Código inválido!!!
            </div>

        <?php } ?>
        
       
          <div class="input-field col s12">
            <input id="codigo" type="text" name="txtcodigo"  minlength="8" maxlength="8"  required>
            <label for="codigo">Código de Verificação</label>
          </div>
          <div class="cadastroCad mTop3">
          <a href="#">Reenviar código </a>
          </div>
        

          

  </div>
</div>


<br>

<div class="center">
<button id="botao" type="submit" class="btn waves-effect waves-light botao">Mudar senha</button>
</div>



</form>
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