<!DOCTYPE html>
<html>
<head>
    <title>Cadastro - Prevenção</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="img1.ico">
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
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }
        
        .registration-form {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            opacity: 0.9;
        }
        
        .registration-form input[type="text"],
        .registration-form input[type="email"],
        .registration-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        
        .registration-form button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        
        .registration-form button:hover {
            background-color: #45a049;
        }
        
        .registration-form p {
            color: #333;
            font-size: 14px;
            margin-top: 10px;
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
    <div class="container">
        <h1>Cadastro</h1>
        <form class="registration-form">
            <input type="text" name="name" placeholder="Nome"><br>
            <input type="email" name="email" placeholder="E-mail"><br>
            <input type="password" name="password" placeholder="Senha"><br>
            <button type="submit">Cadastrar</button>
            <p>Já possui uma conta? <a href="index.php">Faça login</a>.</p>
        </form>
    </div>
    <div class="footer">
        &copy; 2023 Prevenção. Todos os direitos reservados.
    </div>
</body>
</html>