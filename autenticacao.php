<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "158973";
$dbname = "sistemacontagens";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['authenticated'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $row['nome']; // Armazena o nome do usuário na sessão

        header("Location: seletor.php");
        exit();
    } else {
        $errorMessage = "Credenciais inválidas.";
    }
}

$conn->close();
?>
