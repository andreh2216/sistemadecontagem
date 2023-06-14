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
    <link rel="icon" type="image/x-icon" href="img1.ico">
    <title>Prevenção - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            
        }
        h1 {
            margin: 0;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .header a {
            color: #fff;
            margin-right: 10px;
            text-decoration: none;
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

        .footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="header">
        <h1>Prevenção</h1>
        <h2>Olá, <?php echo $_SESSION['nome']; ?></h2>
        <a href="historico.php">Histórico</a>
        <a href="alterar_senha.php">Alterar Senha</a>
       <a href="logout.php">Sair</a>
    </div>
    

    <div class="panel">
       
        <p>Data: <span id="date"></span></p>
        <p>Hora: <span id="time"></span></p>
    </div>

    <div class="seletor">
        <button id="padaria-button" onclick="openPage('padaria.php')">Padaria</button>
        <button id="galeteria-button" onclick="openPage('galeteria.php')">Galeteria</button>
        <button id="frango-button" onclick="openPage('cFrango.php')">Frango</button>
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

    <div class="footer">
        &copy; 2023 Prevenção. Todos os direitos reservados.
    </div>

</body>
</html>