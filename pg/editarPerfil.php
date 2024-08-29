<?php
//require: caso gere um erro, não exibe a pagina home.php

require_once "../php/valida_acesso.php";

$_SESSION['autenticado2'] = "nao";
$_SESSION['autenticadoInfo2'] = "nao";
$_SESSION['autenticadoInfo'] = "nao";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar perfil</title>


  <?php

  include('../php/links.php');

  ?>


</head>

<body class="">


  <?php
  if (isset($_GET['perfil']) && ($_GET['perfil'] == 'validado1')) { ?>

    <div id="modal" class="modal center">
      <div class="modal-content">
        <h4>E-mail Validado Com Sucesso</h4>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat">Fechar</a>
      </div>
    </div>

  <?php } ?>

  <header class="fundoImagem">
    <nav class="navBarra z-depth-5 fadeIn">

      <div class="container-fluid">
        <div class="row">
          <?php
          include('../php/logo2.php');
          ?>

    </nav>



  </header>







  <article>

    <?php include "../php/ferramentas.php"; ?>


  </article>



  <article class="suave">



    <div class="container  cMarginTop">
      <div class="row  center">

        <h4 class="mBottom4 mTop5">Perfil</h4>

        <div class="card borderCard ">
          <div class="card-content ">



            <form method="post" enctype="multipart/form-data" action="../php/salvarAlteracao.php">

              <div class="row">


                <?php echo "<img class='circle' src='../fotosP/" . $_SESSION['foto'] . "' height='150px' width='150px'>"; ?>


                <div class="file-field input-field col s12">
                  <div class="btn botao">
                    <span>Foto de Perfil</span>
                    <input type="file" id="imagem" name="imagem">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>


                <?php if ($_SESSION['pessoa'] == "Pessoa Física") { ?>
                  <div class="input-field col s12 m6 l6 xl6">
                    <input id="nome" type="text" name="txtnome" pattern="^[^-\s][a-zA-ZÀ-ú ]*" minlength="2" maxlength="30" data-length="30" required value="<?php echo $_SESSION['nome'] ?>">
                    <label for="nome"> <b> Nome </b> </label>
                  </div>


                  <div class="input-field col s12 m6 l6 xl6">
                    <input id="sobrenome" type="text" name="txtsobrenome" pattern="^[^-\s][a-zA-ZÀ-ú ]*" minlength="2" maxlength="30" data-length="30" required value="<?php echo $_SESSION['sobrenome'] ?>">
                    <label for="sobrenome"> <b>Sobrenome </b></label>
                  </div>
                <?php } else { ?>

                  <div class="input-field col s12 m12 l12 xl6">
                    <input id="razao" type="text" name="txtnome" pattern="^[^-\s][a-zA-ZÀ-ú ]*" minlength="2" maxlength="30" data-length="30" required value="<?php echo $_SESSION['nome'] ?>">
                    <label for="razao"> <b> Razão social </b> </label>
                  </div>
                <?php } ?>

                <div class="input-field col s12 m6 l6 xl6">
                  <input id="data" type="text" name="txtdata" minlength="1" maxlength="2" min="18" max="99" data-length="2" disabled required value=" <?php echo $_SESSION['data']; ?>">
                  <label for="data"> <b> <?php if ($_SESSION['pessoa'] == "Pessoa Física") { ?> Data de nascimento <?php } else { ?> Data de fundação <?php } ?></b> </label>
                </div>


                <?php if ($_SESSION['pessoa'] == "Pessoa Física") { ?>
                  <div class="input-field col s12 m6">
                    <input type="text" id="profissao" name="txtprofissao" value="<?php echo $_SESSION['profissao']; ?>" required />
                    <label for="profissao">Profissão</label>
                  </div>

                <?php } else { ?>

                  <div class="input-field col s12 m6">
                    <input type="text" id="profissao" name="txtprofissao" value="<?php echo $_SESSION['profissao']; ?>" required />
                    <label for="profissao">Ramo de atuação</label>
                  </div>

                <?php } ?>


                <?php if ($_SESSION['pessoa'] == "Pessoa Física") { ?>
                  <div class="input-field col s12 m6">
                    <input type="text" id="cpf" name="txtcpfcnpj" value="<?php echo $_SESSION['cpfcnpj']; ?>" disabled required />
                    <label for="cpf">CPF</label>
                  </div>

                <?php } else { ?>

                  <div class="input-field col s12 m6">
                    <input type="text" id="cnpj" name="txtcpfcnpj" value="<?php echo $_SESSION['cpfcnpj']; ?>" disabled required />
                    <label for="cnpj">CNPJ</label>
                  </div>

                <?php } ?>
                <div class="input-field col s12 m6 l6 xl6">
                  <input disabled id="nivel" type="text" value="<?php echo $_SESSION['perfil'] ?>" name="txtnivel" class="">
                  <label class="active" for="nivel"> <b> Nível do Perfil </b> </label>
                </div>


                <div class="input-field col s12 m6">
                  <input type="text" id="cep" name="txtcep" value="<?php echo $_SESSION['cep'] ?>" disabled required />
                  <label for="cep">CEP</label>
                </div>

                <div class="input-field col s12 m6">
                  <input type="text" id="uf" name="txtuf" value="<?php echo $_SESSION['estado'] ?>" disabled required />
                  <label id="estado1" for="uf">Estado</label>
                </div>

                <div class="input-field col s12 m6">
                  <input type="text" id="cidade" name="txtcidade" value="<?php echo $_SESSION['cidade'] ?>" disabled required />
                  <label id="cidade1" for="cidade">Cidade</label>
                </div>

                <div class="input-field col s12 m6">
                  <input type="text" id="bairro" name="txtbairro" value="<?php echo $_SESSION['bairro'] ?>" disabled required />
                  <label id="bairro1" for="bairro">Bairro</label>
                </div>

                <div class="input-field col s12 m6">
                  <input type="text" id="logradouro" name="txtlogradouro" value="<?php echo $_SESSION['endereco'] ?>" disabled required />
                  <label id="logradouro1" for="logradouro">Endereço</label>
                </div>

                <div class="input-field col s12 m6">
                  <input type="text" id="complemento" name="txtcomplemento" value="<?php echo $_SESSION['complemento'] ?>" disabled />
                  <label id="complemento1" for="complemento">Complemento</label>
                </div>

                <div class="input-field col s12 m6">
                  <input type="text" id="numero" name="txtnumero" maxlength="10" value="<?php echo $_SESSION['numero'] ?>" disabled required />
                  <label id="numero1" for="numero">Número</label>
                </div>

                <div class="input-field col s12 m12">
                  <input id="email" name="txtemail" type="email" class="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" disabled required value="<?php echo $_SESSION['email'] ?>">
                  <label for="email"> <b> Email </b></label>
                  <a class="modal-trigger" href="#modal55"><i class="material-icons prefix lapis">mode_edit</i></a>
                </div>


                <div class="input-field col s12">
                  <textarea id="textarea" type="text" name="txtsobre" class="materialize-textarea"><?php echo $_SESSION['sobre'] ?></textarea>
                  <label for="textarea"> Biografia </label>
                </div>



              </div>



              <?php if (isset($_GET['editar']) && ($_GET['editar'] == 'erro1')) { ?>

                <div id="mensagem" class="mensagemPa">
                  Erro ao enviar imagem!!!
                </div>

              <?php } ?>

              <?php if (isset($_GET['editar']) && ($_GET['editar'] == 'erro2')) { ?>

                <div id="mensagem" class="mensagemPa">
                  A imagem deve ser menor que 1MB
                </div>

              <?php } ?>

              <?php if (isset($_GET['editar']) && ($_GET['editar'] == 'erro3')) { ?>

                <div id="mensagem" class="mensagemPa">
                  Selecione um formato válido!!!!
                </div>

              <?php } ?>


              <button type="submit" name="action" class="btn waves-effect waves-light botao  ">Salvar Alterações</button>




            </form>



          </div>
        </div>
      </div>
    </div>


  </article>


  <article>

    <div id="modal55" class="modal">
      <div class="modal-content center">
        <h4>Alteração de Email</h4>
        <br><br>

        <form method="post" action="../php/mudar_email.php">

          <div class="input-field ">
            <input id="email" name="txtemail" type="email" class="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            <label for="email">Email</label>
          </div>

          <div class="input-field">
            <input id="confirmeemail" name="txtconfirmeemail" type="email" class="" required>
            <label for="confirmeemail">Confirme E-mail</label>
          </div>


      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect red white-text waves-dark btn-flat"><b>Fechar</b></a>
        <button id="botao" type="submit" name="action" class="waves-effect waves-dark btn-flat "> <b> Salvar Alteração </b></button>
        </form>
      </div>
    </div>


    <?php
    if (isset($_GET['perfil']) && ($_GET['perfil'] == 'erro1')) { ?>

      <div id="modal66" class="modal">
        <div class="modal-content center">
          <h4>Alteração de Email</h4>
          <br><br>

          <form method="post" action="../php/mudar_email.php">

            <div class="input-field ">
              <input id="email" name="txtemail" type="email" class="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
              <label for="email">Email</label>
            </div>

            <div class="input-field">
              <input id="confirmeemail" name="txtconfirmeemail" type="email" class="" required>
              <label for="confirmeemail">Confirme E-mail</label>
            </div>

            <div class="mensagemPa">
              Email ja existente ou incorreto
            </div>

        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect red white-text waves-dark btn-flat"><b>Fechar</b></a>
          <button id="botao" type="submit" name="action" class="waves-effect waves-dark btn-flat "> <b> Salvar Alteração </b></button>
          </form>
        </div>
      </div>

    <?php } ?>


    <?php
    if (isset($_GET['perfil']) && ($_GET['perfil'] == 'erro2')) { ?>

      <div id="modal77" class="modal">
        <div class="modal-content center">
          <h4>Alteração de Email</h4>
          <br><br>

          <form method="post" action="../php/mudar_email.php">

            <div class="input-field ">
              <input id="email" name="txtemail" type="email" class="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
              <label for="email">Email</label>
            </div>

            <div class="input-field">
              <input id="confirmeemail" name="txtconfirmeemail" type="email" class="" required>
              <label for="confirmeemail">Confirme E-mail</label>
            </div>

            <div class="mensagemPa">
              Digite o novo email antes de prosseguir
            </div>

        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect red white-text waves-dark btn-flat"><b>Fechar</b></a>
          <button id="botao" type="submit" name="action" class="waves-effect waves-dark btn-flat "> <b> Salvar Alteração </b></button>
          </form>
        </div>
      </div>

    <?php } ?>



  </article>



  <?php

  include('../php/scripts.php');

  ?>
</body>

</html>