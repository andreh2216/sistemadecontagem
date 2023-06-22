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
<html>
<head>
    <link rel="icon" type="image/x-icon" href="imagens/img1.ico">
    <link rel="stylesheet" href="/css/style.css">
    <title>Prevenção - Aplicacao</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <style>
     
        h1 {
            margin: 0;
        }

     

        .seletor {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .seletor button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            font-weight: bold;
            width: 180px;
            cursor: pointer;
            border: none;
            outline: none;
            transition: background-color 0.3s ease;
        }

        #padaria-button {
            background-color: #4CAF50;
            color: white;
        }

        #galeteria-button {
            background-color: #FF9800;
            color: white;
        }

        #frango-button {
            background-color: #2196F3;
            color: white;
        }

        .panel {
            background-color: #f2f2f2;
            padding: 20px;
            border: 1px solid #ccc;
            margin-top: 20px;
            text-align: center;
        }

        .panel h2 {
            margin-top: 0;
        }

        .panel p {
            margin-bottom: 10px;
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
            <h1><a  href="/seletor.php">Aplicação</a></h1>
      
           
  



        </div>

    
<div class="buttons-header">


<a href="seletor.php"><img class="ico" src="/imagens/casa-em-branco.png" alt="home" ></a>
<a href="aplicacao.php"> <img  class="ico"src="/imagens/verificacao-de-lista.png" alt="home" ></a>
<a href="relatorio.php"> <img class="ico"src="/imagens/alinhamento-do-grafico.png" alt="home"></a>
<a href="historico.php"> <img class="ico"src="/imagens/tempo-passado.png" alt="home"></a>
<a href="logout.php"> <img class="ico"src="/imagens/definicoes.png" alt="home"></a>


    </div>
        <div class="panel">
        <p>Data: <span id="date"></span></p>
        <p>Hora: <span id="time"></span></p>
        <p>Olá, <?php echo $_SESSION['nome']; ?></p>
    </div>

    <div class="seletor">
        <button id="padaria-button" onclick="openPage('aplicacao/padaria.php')">Padaria</button>
        <button id="galeteria-button" onclick="openPage('aplicacao/galeteria.php')">Galeteria</button>
        <button id="frango-button" onclick="openPage('aplicacao/cFrango.php')">Frango</button>
    </div>

    <script>
        function openPage(url) {
            window.location.href = url;
        }

        function updateTime() {
            var now = new Date();
            var date = now.toLocaleDateString();
            var time = now.toLocaleTimeString();
            document.getElementById("date").textContent = date;
            document.getElementById("time").textContent = time;
        }

        setInterval(updateTime, 1000); // Atualizar a cada segundo
    </script>


</body>
</html>