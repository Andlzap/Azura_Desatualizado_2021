<?php



require_once "../php/valida_acesso.php";




  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bate papo</title>

    
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



<div class="col s12 m6 offset-m3 mTop1 borderRcontato2">
               <div class="chat-area">
                   <header>
                   <?php 
                require_once "../php/conexao.php";
                $conexao = novaConexao();
                $proposta_id = $_GET['proposta_id'];

                $sql1 = "SELECT * FROM proposta WHERE idProp = '$proposta_id' ";
                $stmt1 = $conexao->prepare($sql1);
                $result1 = $conexao->query($sql1);
                $rows1 = $result1->fetchAll(PDO::FETCH_ASSOC);

                $consulta = null;
                $nomeConsulta = null;

                foreach($rows1 as $propT){
                    $emailTec = $propT['emailPropTecnico'];
                    $cliente = $propT['idPropCliente'];
                    $consulta = $propT['idPropConsulta'];
                    $nomeConsulta = $propT['consultaNome'];

                    if($_SESSION['perfil'] == "Técnico") {
                        $sql = "SELECT * FROM usuarios WHERE UsuId = '$cliente' ";
                        $stmt = $conexao->prepare($sql);
                        $result = $conexao->query($sql);
                        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
                         if(count($rows) > 0){
                         foreach($rows as $row){
                         $idUsu = $row['UsuId'];
                         $nome= $row['UsuNome'];
                         $sobrenome= $row['UsuSobrenome'];
                         $foto = $row['UsuFoto'];
                         }
                        }
                    } else if($_SESSION['perfil'] == "Cliente") {
                        $sql = "SELECT * FROM usuarios WHERE UsuEmail = '$emailTec' ";
                        $stmt = $conexao->prepare($sql);
                        $result = $conexao->query($sql);
                        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
                         if(count($rows) > 0){
                         foreach($rows as $row){
                         $idUsu = $row['UsuId'];
                         $nome= $row['UsuNome'];
                         $sobrenome= $row['UsuSobrenome'];
                         $foto = $row['UsuFoto'];
                         }
                        }
                    }
                }
  
                $_SESSION['fotoCont'] = $foto;
                

                ?>
                       <a href="contatos.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                   <?php echo "<img class='circle' src='../fotosP/".$foto."'>"; ?>
                   <div class="msgChat">
                       <span><?php echo $nome ." ". $sobrenome; ?></span>
                       <p> <?php echo "Consulta: " .$consulta. " - " .$nomeConsulta; ?> </p>
                   </div>          
                   </header>
                   <div class="chat-box">
                       
                       
                   </div>
                   <form action="#" class="typing-area" style="">
                       <input type="text" name="consulta_id" value="<?php echo $consulta;?>" hidden>
                       <input type="text" name="outgoing_id" value="<?php echo $_SESSION['idUsuario'];?>" hidden>
                       <input type="text" name="incoming_id" value="<?php echo $idUsu; ?>" hidden>
                           <input type="text" name="message" class="input-field" placeholder="Digite sua mensagem...">
                           <button><i class="fa fa-arrow-right"></i></button>
                    </form>
               </div>
            </div>




            </div>
                

               
            
                </div>

            </div>
    </div>
</article>




            
    <?php
include('../php/scripts.php');
?>

<script src="../js/chat2.js"></script>


</body>
</html>