
<form action="login.php" method="POST">

    <input type="text" name="usuario" placeholder="usuario">
    <input type="text" name="senha" placeholder="senha">
    <input type="submit">

</form>


<?php 

    if(!isset($_SESSION)){
        session_start();
    }
    

    if(!empty($_POST)){

        if($_POST["usuario"] == "admin" && $_POST["senha"] == "1234"){

            $_SESSION["usuario_logado"]["usuario"] = $_POST["usuario"];

            $_SESSION["usuario_logado"]["senha"] = $_POST["senha"];

            header("Location: area_restrita.php");

            die;

        } else {

            echo "senha ou usuario invalidos";

        }

    }

?>
