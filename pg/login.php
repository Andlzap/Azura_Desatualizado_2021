
<?php session_start();
session_destroy(); ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <?php

  include('../php/links.php');

  ?>





</head>

<?php
if (isset($_GET['login']) && ($_GET['login'] == 'validado1')) { ?>

  <div id="modal" class="modal center">
    <div class="modal-content">
      <h4>E-mail Validado Com Sucesso</h4>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat">Fechar</a>
    </div>
  </div>

<?php } ?>


<?php
if (isset($_GET['login']) && ($_GET['login'] == 'validado2')) { ?>

  <div id="modal1223" class="modal center">
    <div class="modal-content">
      <h4>Senha trocada com sucesso</h4>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat">Fechar</a>
    </div>
  </div>

<?php } ?>




<body class="bodyCol suave">

  <header>
    <nav class="transparent z-depth-4 ">

      <div class="container-fluid ">

          
          
      <div class="col s3 m8 l9">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a class="btn waves-effect borderButton modal-trigger btn-flat" href="index.php">Página inicial</a></li>
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

    <nav class="nav1">
      <div class="nav-wrapper  bodyCol">
      <div class="row">
        <div class="col s12 center">
          <a href="index.php" class="breadcrumb">Página Inicial</a>
          <a href="cadastro.php" class="breadcrumb"> Cadastro</a>
          <a href="#!" class="breadcrumb"> <b> Login </b></a>
        </div>
        </div>
      </div>
    </nav>

  </header>

  <article>



    <div class="container mPadTop3 ">

      <div class="row">

        <div class="col s12 m1 l2 xl3"></div>
        <div class="col s12 m10 l8 xl6">

          <div class="card borderCard z-depth-5 cardFundo">
            <div class="card-content center formulario">

              <h4 class="mTop5 mBottom4 center"> Iniciar Sessão </h4>




              <form method="post" action="../php/valida_login.php">

                <div class="row ">
                  <div class="col s12">


                    <div class="input-field col s12">
                      <input id="email" name="txtemail" type="email" class="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                      <label for="email">Email</label>
                      <span class="helper-text" data-error="Digite corretamente" data-success="Correto"></span>
                    </div>




                    <div class="input-field col s12">
                      <input id="senha" type="password" name="txtsenha" class="" minlength="8" maxlength="20" data-length="20" required>
                      <label for="senha">Senha</label>
                      <span class="helper-text" data-error="Digite corretamente" data-success="Correto"></span>
                    </div>

          
                    

                    


                    <?php
                    //isset: se login está setada e contém valor erro
                    //passando pelo método get

                    if (isset($_GET['login']) && ($_GET['login'] == 'erro')) { ?>

                      <div class="mensagemPa">
                        Usuário ou Senha Inválido(s)!
                      </div>

                    <?php } ?>

                    <!-- exibe erro caso usuário tentou entrar no sistema sem se logar -->

                    <?php

                    if (isset($_GET['login']) && ($_GET['login'] == 'erro2')) {
                    ?>
                      <div class="mensagemPa">
                        Faça login antes de acessar as páginas protegidas
                      </div>

                    <?php } ?>




                  </div>
                </div>




                <div class="center">
                  <button id="botao" type="submit" class="btn waves-effect waves-light botao">Entrar</button>
                </div>

                

                <div class="cadastroCad mTop3">
                  <a href="cadastro.php">NÃO ESTÁ CADASTRADO?</a> <br><br>
                  <a href="#modalEsqueceuSenha" class="modal-trigger">ESQUECEU A SENHA? </a>
                </div>

                

              </form>
            </div>
          </div>

        </div>

      </div>
    </div>





    <div id="modalEsqueceuSenha" class="modal">
                <div class="modal-content center">
         <h4>Informe os dados abaixo!!</h4>
         <br><br>

         <form method="post" action="../php/confirmaEsqueceuSenha.php">

         <div class="input-field ">
        <input id="email12" name="txtemail12" type="email" class="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
        <label for="email12">Email da conta</label>
        </div>

        <div class="input-field">
          <input id="senha12" type="password" name="txtsenha12" class="" minlength="8" maxlength="20" data-length="20" required>
          <label for="senha12">Nova Senha</label>
        </div>
       

      
       </div>

      <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect red white-text waves-dark btn-flat"><b>Fechar</b></a>
      <button id="botao" type="submit"  name="action" class="waves-effect waves-dark btn-flat "> <b> Continuar </b></button>
      </form>
      </div>
      </div>









  </article>


























  <script src="../js/cadastro.js"></script>


  <?php

  include('../php/scripts.php');

  ?>


</body>

</html>