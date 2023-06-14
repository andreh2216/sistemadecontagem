<?php
session_start();

// Destruir todas as sessões e redirecionar para a página de login
session_unset();

header("Location: login.php");
exit();
?>