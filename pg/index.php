


<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Inicial</title>


  <?php

  include('../php/links.php');

  ?>




</head>

<body class="">

  <div class="fundoImagem2">
    
    <div class="navBarra2">
      
      <div class="quadrado suave">
      <header>

        <nav class="transparent nav1">

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
            
            <li><a href="login.php">Logar</a></li>
          
          </ul>

        </nav>

      </header>

      <article>



        <div class="carousel carousel-slider center carousel1 ">
          <div class="carousel-fixed-item center">
            <a class="btn waves-effect borderButton butComec" href="cadastro.php">Começar</a>
          </div>

          <div class="right setaTam ">
            <a class="waves-effect movePrevCarousel"><i id="next" class="material-icons medium setaCor mRight2">chevron_right</i></a>
          </div>
          <div class="left setaTam ">
            <a class="waves-effect moveNextCarousel"><i id="prev" class="material-icons medium setaCor mLeft2 ">chevron_left</i></a>
          </div>

          <div id="car1" class="carousel-item  white-text mPadTop5" href="#one!">
          <h1 class="">Comece Agora!</h4>
              <h6>Não perca tempo! Clique no botão abaixo e comece já a procurar por serviços.</h6>
          </div>
         
          <div class="carousel-item  white-text mPadTop5 " href="#two!">         
            <h1 class="">Satisfação Total</h4>
            <h6>Entre e procure técnicos qualificados para resolver seus problemas.<h6>
          </div>
          <div class="carousel-item  white-text mPadTop5" href="#three!">
            <h1 class="">Atenda suas necessidades!</h4>
              <h6 class="mBottom3">Está com aqueles problemas inoportunos que atrapalham completamente a sua rotina diária? você pode resolvê-los aqui no Azura.<h6>
          </div>
          

        </div>







      </article>

    </div>
  </div>
</div>

  <article class="mTop5">
    <div class="container">
     <h4  class="center"> <a class="black-text" href="../pg/index.php"> Serviços Disponíveis </a> </h4>

     <div id="c2" class="row mTop4">
     
     


    
     <nav  class="barraPesquisa fundoImagem mBottom5">
    <div class="nav-wrapper">
      <form method="post" enctype="multipart/form-data" action="../php/carregarPesquisaIndex.php"> 
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
  require_once "../php/pesquisarIndex.php";
  $tamanho = count($rows);
 } else {
  
  require_once "../php/carregarProcurarConsultaIndex.php";
  $tamanho = 1;
 }


 

 if($tamanho>=1){
  foreach($rows as $usuario_consulta)  { 

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
        <form method="post" enctype="multipart/form-data" action="login.php">
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


<?php
if(empty($_GET['p'])) {
  if(empty($_GET['pesquisa'])) { ?>
<div  class="col s12 center mTop3">
 <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active" style="background: #085068;"><a href="?p=1">1</a></li>
    <li class="waves-effect"><a href="?p=2">2</a></li>
    <li class="waves-effect"><a href="?p=3">3</a></li>
    <li class="waves-effect"><a href="?p=4">4</a></li>
    <li class="waves-effect"><a href="?p=5">5</a></li>
    <li class="waves-effect"><a href="?p=2"><i class="material-icons">chevron_right</i></a></li>
  </ul>
</div>
<?php }} ?>


<?php
if(isset($_GET['p']) && ($_GET['p'] == '1')) { ?>
<div  class="col s12 center mTop3">
 <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active" style="background: #085068;"><a href="?p=1">1</a></li>
    <li class="waves-effect"><a href="?p=2">2</a></li>
    <li class="waves-effect"><a href="?p=3">3</a></li>
    <li class="waves-effect"><a href="?p=4">4</a></li>
    <li class="waves-effect"><a href="?p=5">5</a></li>
    <li class="waves-effect"><a href="?p=2"><i class="material-icons">chevron_right</i></a></li>
  </ul>
</div>
<?php } ?>
 
<?php
if(isset($_GET['p']) && ($_GET['p'] == '2')) { ?>
<div  class="col s12 center mTop3">
 <ul class="pagination">
    <li class="waves-effect"><a href="?p=1"><i class="material-icons">chevron_left</i></a></li>
    <li class="waves-effect"><a href="?p=1">1</a></li>
    <li class="active" style="background: #085068;"><a href="?p=2">2</a></li>
    <li class="waves-effect"><a href="?p=3">3</a></li>
    <li class="waves-effect"><a href="?p=4">4</a></li>
    <li class="waves-effect"><a href="?p=5">5</a></li>
    <li class="waves-effect"><a href="?p=3"><i class="material-icons">chevron_right</i></a></li>
  </ul>
</div>
<?php } ?>

<?php
if(isset($_GET['p']) && ($_GET['p'] == '3')) { ?>
<div  class="col s12 center mTop3">
 <ul class="pagination">
    <li class="waves-effect"><a href="?p=2"><i class="material-icons">chevron_left</i></a></li>
    <li class="waves-effect"><a href="?p=1">1</a></li>
    <li class="waves-effect"><a href="?p=2">2</a></li>
    <li class="active" style="background: #085068;"><a href="?p=3">3</a></li>
    <li class="waves-effect"><a href="?p=4">4</a></li>
    <li class="waves-effect"><a href="?p=5">5</a></li>
    <li class="waves-effect"><a href="?p=4"><i class="material-icons">chevron_right</i></a></li>
  </ul>
</div>
<?php } ?>

<?php
if(isset($_GET['p']) && ($_GET['p'] == '4')) { ?>
<div  class="col s12 center mTop3">
 <ul class="pagination">
    <li class="waves-effect"><a href="?p=3"><i class="material-icons">chevron_left</i></a></li>
    <li class="waves-effect"><a href="?p=1">1</a></li>
    <li class="waves-effect"><a href="?p=2">2</a></li>
    <li class="waves-effect"><a href="?p=3">3</a></li>
    <li class="active" style="background: #085068;"><a href="?p=4">4</a></li>
    <li class="waves-effect"><a href="?p=5">5</a></li>
    <li class="waves-effect"><a href="?p=5"><i class="material-icons">chevron_right</i></a></li>
  </ul>
</div>
<?php } ?>

         
<?php
if(isset($_GET['p']) && ($_GET['p'] == '5')) { ?>
<div  class="col s12 center mTop3">
 <ul class="pagination">
    <li class="waves-effect"><a href="?p=4"><i class="material-icons">chevron_left</i></a></li>
    <li class="waves-effect"><a href="?p=1">1</a></li>
    <li class="waves-effect"><a href="?p=2">2</a></li>
    <li class="waves-effect"><a href="?p=3">3</a></li>
    <li class="waves-effect"><a href="?p=4">4</a></li>
    <li class="active" style="background: #085068;"><a href="?p=5">5</a></li>
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
</div>
<?php } ?>

<?php
if(isset($_GET['pesquisa']) && ($_GET['pesquisa'] == '1')) { ?>
<div class="col s12 center mTop1">
<h6 class="red-text"> Para mais serviços efetue o login e boa sorte!!! </h6>
<a class="btn waves-effect btn botao mTop2 mBottom3" href="login.php">Logar</a>
</div>

<?php } ?>
    </div>
    </div>

    </article>
    <hr>
    <a href="#" id="foo"></a>

  <article id="article1">

    <div class="container marginIndex1 suave">
      <div class="row fonteIndex">
        <div class="col s12 mBottom5">
          <h3 class="fonteIndex center"> <b> Como funciona? </b></h3>
        </div>

        <div class="col s12 m12 l4 xl4 mTop2 center">
          <i class="iTam material-icons">send</i>
          <h5 class="fonteIndex"> <b> Publique sua necessidade </b></h5> <br>
          <p class="fonteTamanhoP">Publique a sua necessidade para profissionais qualificados. Você irá receber propostas de freelancers que atenderão ao seu pedido.</p>
        </div>

        <div class="col s12 m12 l4 xl4 mTop2 center">
          <i class="iTam material-icons">person_outline</i>
          <h5 class="fonteIndex"> <b> Escolha o seu Freelancer </b></h5> <br>
          <p class="fonteTamanhoP">Veja o perfil do técnico, histórico de trabalho, portfólio e feedback. Escolha o que mais te agradar!</p>
        </div>

        <div class="col s12 m12 l4 xl4 mTop2 center">
          <i class="iTam material-icons">shield</i>
          <h5 class="fonteIndex"> <b> Pague com segurança </b></h5> <br>
          <p class="fonteTamanhoP">Com o sistema seguro que o Azura te oferece, o pagamento somente será passado para técnico quando o trabalho for concluído e você estar satisfeito com o resultado!</p>
        </div>

      </div>
    </div>

  </article>

  <article id="article2" class="marginIndex">
    <div class="container-fluid white-text">
      <div class="row  fundoImagem3">
        <div class="col s12 xl6 suave">
          <h3 class="marginIndexLeft marginIndex1 fontText"> Invista no que se interessar</h3>
        </div>
        <div class="col s12 xl6 suave ">
          <p class="marginIndexLeft marginIndex1 fontText mRight4 fontSzText"> Procure entre os pedidos para que encontre um que mais te interesse. Converse com o cliente para chegarem
            em um acordo sobre o problema, ideias, forma de pagamento e começar a trabalhar</p>
        </div>
        <div class="col s12 xl7 suave ">
        </div>
        <div class="col s12 center xl5 mTop5 marginBottomIndex suave ">
          <a class="btn waves-effect borderButton butComec" href="cadastro.php">Começar</a>
        </div>

        <div class="col s12 xl6 fundoIndex1">
          <h3 class="marginIndexLeft marginIndex1 fontText suave"> Solucione suas<br> necessidades!</h3>

          

          <h5 class="mTop5  marginIndexLeft  fontText suave"> Publique livremente </h5>
          <p class="marginIndexLeft fontText mRight4 fontSzText suave"> Fique à vontade para publicar quantos projetos <br>você quiser, quando você quiser!</p>

          <hr class="mTop2 mBottom2 right suave" width="650px">

          <h5 class=" marginIndexLeft  fontText suave"> Encontre o melhor para você </h5>
          <p class="marginIndexLeft fontText mRight4 fontSzText suave"> Discuta diretamente com o técnico sobre <br>o seu problema e a sua proposta através do chat,<br> até que cheguem em um acordo!</p>
         

          <a class="btn waves-effect borderButton butComec marginIndexLeft mTop5 suave" href="cadastro.php">Começar</a>
        </div>

        <div class="col s12 xl6 fundoIndex ">
          <figure class="center marginIndex1">
          <img class="imgIndex materialboxed suave"  src="../img/imagemIndex.png"> 
          </figure>
        </div>
       
        
       
      </div>
    </div>


  </article>

  <h4 class="marginIndex1 center fonteIndex suave"><b> Especializações dos técnicos </b> </h4> 

  <article class="mTop5 mLeft5 suave">
    

   <div class="container">
      
     <div class="row">
       <div class="col s6 push-m3 push-l3 push-xl4">
       
      
    <ul>
      <li class="mTop1 li">Design gráfico</li>
      <li class="mTop1 li">PHP</li>
      <li class="mTop1 li">JavaScript</li>
      <li class="mTop1 li">MySQL</li>
      <li class="mTop1 li">SQL</li>
    </ul>
            

       </div>

       <div class="col s6 push-m1 push-l1 push-xl1">
       
      
    <ul>
      <li class="mTop1 li">Java</li>
      <li class="mTop1 li">Web Design</li>
      <li class="mTop1 li">HTML</li>
      <li class="mTop1 li">Serviço ao cliente</li>   
      <li class="mTop1 li">Python</li>
    </ul>

    

    
            

       </div>

       
     </div>
   </div>

  </article>


  <footer class="page-footer marginIndex1 footerColor ">
          <div class="container suave">
            <div class="row">
              <div class="col s12 center">
              <h4 class="white-text fonteLogo2 mBottom2"> A Z U R A</h4> 

                <p><a class="grey-text text-lighten-4 mRight1" href="#"> Suporte </a> • 
                <a class="grey-text text-lighten-4 mLeft1 mRight1" href="#"> Políticas e Privacidade </a> • 
                <a class="grey-text text-lighten-4 mLeft1 mRight1" href="#"> Termos e condições  </a> • 
                <a class="grey-text text-lighten-4 mLeft1" href="#"> Sobre  </a>
                
               </p>
              </div>
              
            </div>
          </div>
          
          <div class="footer-copyright footerColor">
            <div class="container center suave">
              <div class="row">

              <div class="col s12 m6 push-m3">

            © 2021 | Azura - Todos os direitos reservados 
          </div>

         
          </div>
            </div>
          </div>
        </footer>



  <?php

  include('../php/scripts.php');

  ?>

<?php
if(isset($_GET['p']) && ($_GET['p'] == '1')) { ?>
<script>
  $(document).ready(function() { 
window.location.href='#c2';
});
</script>
<?php } ?>

<?php
if(isset($_GET['p']) && ($_GET['p'] == '2')) { ?>
<script>
  $(document).ready(function() { 
window.location.href='#c2';
});
</script>
<?php } ?>


<?php
if(isset($_GET['p']) && ($_GET['p'] == '3')) { ?>
<script>
  $(document).ready(function() { 
window.location.href='#c2';
});
</script>
<?php } ?>


<?php
if(isset($_GET['p']) && ($_GET['p'] == '4')) { ?>
<script>
  $(document).ready(function() { 
window.location.href='#c2';
});
</script>
<?php } ?>


<?php
if(isset($_GET['p']) && ($_GET['p'] == '5')) { ?>
<script>
  $(document).ready(function() { 
window.location.href='#c2';
});
</script>
<?php } ?>


<?php
if(isset($_GET['pesquisa']) && ($_GET['pesquisa'] == '1')) { ?>
<script>
  $(document).ready(function() { 
window.location.href='#c2';
});
</script>
<?php } ?>
</body>

</html>