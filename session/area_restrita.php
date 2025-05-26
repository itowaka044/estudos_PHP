<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION["usuario_logado"])){
        header("Location: login.php");
        die;
    }

    echo "bem vindo " . $_SESSION["usuario_logado"]["usuario"];

?>

<a href="logout.php">LOGOUT</a>