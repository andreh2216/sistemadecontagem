<?php 

require_once "autenticacao.php"
?>

<html>
<head>
    <link rel="icon" type="image/x-icon" href="imagens/img1.ico">
    <title>Prevenção - Hiperideal Patamares</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
            background: linear-gradient(to bottom, #FF0000, #0000FF);
        }

        h1 {
            color: #333;
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 32px;
            text-align: center;
        }

        .container-login {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        .login-box {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            opacity: 0.9;
        }

        .login-box input[type="email"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .login-box button {
            width: 100%;
            padding: 10px;
            background-color: #0000FF;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-box button:hover {
            background-color: #45a049;
        }

        .login-box a {
            color: #333;
            text-decoration: none;
            margin-top: 5px;
            display: block;
        }

        .login-box a:hover {
            text-decoration: underline;
        }

        .user-info {
            color: #fff;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .footer2 {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }

        .privacy-policy {
            color: #333;
            font-size: 12px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container-login">
        <img src="imagens/img2.png" alt="Logo da empresa" style="height: 210px;">

        <h2 class="user-info" id="user-info"></h2>
        <div class="login-box">
            <h1 style="font-family: 'Roboto Condensed', sans-serif;">Acesso</h1>

            <form action="" method="post">
                <input type="email" id="username" name="email" placeholder="E-mail do usuário" required><br>
                <input type="password" id="password" name="senha" placeholder="Senha" required><br>
                <button type="submit">Entrar</button>
            </form>

            
 
</body>
</html>