<?php

    echo $_SERVER["REQUEST_METHOD"] . "<br>";

    echo $_SERVER["REMOTE_ADDR"] . "<br>";

    echo $_SERVER["HTTP_USER_AGENT"] . "<br>";

    echo $_SERVER["REQUEST_URI"] . "<br>";

    echo $_SERVER["PHP_SELF"] . "<br>";

    echo $_SERVER["DOCUMENT_ROOT"] . "<br>";

?>


<H1>POST:</H1>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <input type="text" name="mensagem">
    <input type="submit" value="enviar">
</form>

<BR>

<H1>GET:</H1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="GET">
    <input type="text" name="mensagem">
    <input type="submit" value="enviar">
</form>

<?php

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        echo "enviado com post <br>" . htmlspecialchars($_POST["mensagem"]);
    }

    if($_SERVER['REQUEST_METHOD'] === "GET"){
        echo "enviado com get <br>" . htmlspecialchars($_SERVER['QUERY_STRING']);
    }

?>
