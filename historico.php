<?php



session_start();

// Verifica se a sessão está autenticada
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: login.php"); // Redireciona para a página de login
    exit();
}

// Restante do código da página aqui...
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Prevenção - Histórico
    </title>

    <style>
        h1 {
            margin: 0;
        }


.buttons-header {display:flex;
            
            size:2px;
     
            position:fixed;
            bottom:0;
       
       
       }


.ico {padding:24px; margin:1px;height:25px;     }  

    </style>
</head>
<body>
<div class="header">


            
            <img id="logo" style="display:none;" src="imagens/img2.png" alt="logo">
            <h1><a  href="/seletor.php">Histórico</a></h1>
      
           
  



        </div>

        <div class="buttons-header">


<a href="seletor.php"><img class="ico" src="/imagens/casa-em-branco.png" alt="home" ></a>
<a href="aplicacao.php"> <img  class="ico"src="/imagens/verificacao-de-lista.png" alt="home" ></a>
<a href="relatorio.php"> <img class="ico"src="/imagens/alinhamento-do-grafico.png" alt="home"></a>
<a href="historico.php"> <img class="ico"src="/imagens/tempo-passado.png" alt="home"></a>
<a href="logout.php"> <img class="ico"src="/imagens/definicoes.png" alt="home"></a>


    </div>

 
</body>
</html>