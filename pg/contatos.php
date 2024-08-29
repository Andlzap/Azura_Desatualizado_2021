<?php

require_once "../php/valida_acesso.php";




  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>

    
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

<article>
    <div class="container mTop2">
        <div class="row">
            <div class="col s12 m6 offset-m3 mTop1 borderRcontato">
                <h5 class="mTop5 center mBottom3">Contatos</h5>

                <section class="users">
                <div class="topnav mLeft1 search">
                <input class="chatPesquisa" id="chatPesquisa" type="text" placeholder="Pesquisar contatos">
                </div>


                <?php 
                require_once "../php/conexao.php";
                $conexao = novaConexao();

                $id = $_SESSION['idUsuario'];

                $sql = "SELECT * FROM usuarios WHERE UsuId = '$id' ";
                $stmt = $conexao->prepare($sql);
                $result = $conexao->query($sql);
                $rows = $result->fetchAll(PDO::FETCH_ASSOC);

                if(count($rows) > 0){
                    foreach($rows as $row){
                        $nome= $row['UsuNome'];
                    }
                }
                ?>

                <div class="users-list" style="overflow-y:auto; height:400px;">
                       
                </div>
                

               
            </section>
            </div>
        </div>
    </div>
</article>







    <?php
include('../php/scripts.php');
?>

<script src="../js/users3.js"></script>


</body>
</html>