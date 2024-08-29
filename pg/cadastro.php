<?php session_start();
session_destroy(); ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>


    <?php

  include('../php/links.php');

  ?>





</head>

<body class="bodyCol2 suave">

    <header>
        <nav class="transparent z-depth-4 nav1">

            <div class="container-fluid">


                <div class="col s3 m6 l8">
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a class="btn waves-effect  borderButton modal-trigger btn-flat" href="index.php">Página
                                Inicial</a></li>
                        <li><a class="btn waves-effect  borderButton modal-trigger btn-flat" href="login.php">Logar</a>
                        </li>
                    </ul>

                </div>


                <?php
     include('../php/logo.php');
    ?>

            </div>




            <ul class="sidenav" id="mobile-demo">
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="login.php">Logar</a></li>
            </ul>


            <div class="row">
                <div class="col s12 center">
                    <a href="index.php" class="breadcrumb">Página Inicial</a>
                    <a href="#!" class="breadcrumb"> <b> Cadastro </b></a>
                </div>
            </div>


        </nav>





    </header>

    <article>

        <div class="container mPadTop3">

            <div class="row">




                <div class="card borderCard z-depth-5 cardFundo col s12 mTop5">
                    <div class="card-content center formulario">

                        <h4> Cadastro </h4>
                        <div id="tituloLog"> </div>


                        <form id="formulario" method="post" enctype="multipart/form-data"
                            action="../php/valida_cadastro.php">



                            <div class="row">



                                <div class="col s12  mBottom3">
                                    <button type="button" class="btn waves-effect waves-light botao tooltipped mTop3"
                                        data-position="bottom"
                                        data-tooltip="Aqui voce se cadastra como cliente, e procura por serviços de freelancers...."
                                        id="nivelCli" value="1">Cliente</button>



                                    <button type="button" class="btn waves-effect waves-light botao tooltipped mTop3"
                                        data-position="bottom"
                                        data-tooltip="Aqui voce se cadastra como Técnico, e procura por serviços como freelancers...."
                                        id="nivelTec" value="2">Técnico</button>
                                </div>


                                <div class="suave" id="form1">
                                    <div class="input-field col s6 m6 l6 xl2 offset-xl3">
                                        <p>
                                            <label>
                                                <input id="group1" name="group1" type="radio" value="Pessoa Física"
                                                    onchange="formulario()" />
                                                <span>Pessoa física</span>
                                            </label>
                                        </p>
                                    </div>

                                    <div class="input-field col s6 m6 xl6">
                                        <p>
                                            <label>
                                                <input id="group2" name="group1" type="radio" value="Pessoa Jurídica"
                                                    onchange="formulario()" />
                                                <span>Pessoa jurídica</span>
                                            </label>
                                        </p>
                                    </div>
                                </div>


                                <div class="" id="form2">

                                </div>

                                <div class="" id="form3">
                                    <div class="input-field col s12 m6">
                                        <input class="gray" id="nivel" type="text" name="txtnivel" value="Null" readonly
                                            required>
                                        <label id="nivelC" for="nivel">Você será cadastrado como:</label>
                                    </div>
                                </div>

                                <div class="" id="form4">

                                </div>


                                <div class="col s12">

                                    <?php
          if(isset($_GET['cadastro']) && ($_GET['cadastro'] == 'erro1'))
          { ?>
                                    <div id="mensagem" class="mensagemPa">
                                        Preencha todos os campos!!
                                    </div>

                                    <?php } ?>

                                    <?php
          if(isset($_GET['cadastro']) && ($_GET['cadastro'] == 'erro2'))
          { ?>
                                    <div id="mensagem" class="mensagemPa">
                                        Confirme o Email corretamente!
                                    </div>

                                    <?php } ?>

                                    <?php
          if(isset($_GET['cadastro']) && ($_GET['cadastro'] == 'erro3'))
          { ?>
                                    <div id="mensagem" class="mensagemPa">
                                        Confirme a Senha corretamente!
                                    </div>

                                    <?php } ?>

                                    <?php
                if (isset($_GET['cadastro']) && ($_GET['cadastro'] == 'erro4')) { ?>
                                    <div id="mensagem" class="mensagemPa">
                                        Email ou Cpf/Cnpj ja cadastrado
                                    </div>

                                    <?php } ?>


                                    <?php
          if(isset($_GET['cadastro']) && ($_GET['cadastro'] == 'erro5'))
          { ?>
                                    <div id="mensagem" class="mensagemPa">
                                        Faça o cadastro primeiramente
                                    </div>

                                    <?php } ?>

                                </div>




                                <div class="col s6 offset-s3">

                                    <button id="botao" type="submit" name="action"
                                        class="btn waves-effect waves-light botao mTop3" disabled>Cadastrar</button>





                                    <div class="cadastroCad mTop3">

                                        <a href="#modal1" class="modal-trigger"> TERMOS E CONDIÇÕES </a>
                                        <div id="modal1" class="modal modal-fixed-footer">
                                            <div class="modal-content">
                                                <h4>TERMOS E CONDIÇÕES</h4>
                                                <p>A bunch of text</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="#!"
                                                    class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="cadastroCad">
                                        <a href="login.php">LOGAR </a>
                                    </div>

                        </form>
                    </div>
                </div>






    </article>




    <?php

  include('../php/scripts.php');

  ?>


    <script src="../js/validaCpf2.js"></script>
    <script src="../js/cadastrar4.js"></script>




</body>

</html>