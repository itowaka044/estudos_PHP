<h2>calculadora basica post</h2>
<form method="POST">
    <input type="number" name="num1">
    <input type="number" name="num2">
    <select name="operacao">
        <option value="add">+</option>
        <option value="sub">-</option>
    </select>
    <input type="submit" value="calcular">
</form>

<h2>calculadora basica get</h2>
<form method="GET">
    <input type="number" name="num1">
    <input type="number" name="num2">
    <select name="operacao">
        <option value="add">+</option>
        <option value="sub">-</option>
    </select>
    <input type="submit" value="calcular">
</form>

<?php

    if(!empty($_POST)){

        if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacao'])){

            $num1Post = (float)$_POST["num1"];

            $num2Post = (float)$_POST["num2"];

            $somaPost = 0;

            if($_POST["operacao"] === 'add'){
                $somaPost = $num1Post + $num2Post;
            }

            if($_POST["operacao"] === 'sub'){
                $somaPost = $num1Post - $num2Post;
            }

            echo "soma post: " . htmlspecialchars($somaPost) . "<br>";
        } else {
            echo "insira todos os inputs <br>";
        }
    }

    if(!empty($_GET)){

        if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operacao'])){

            $num1Get = (float)$_GET["num1"];

            $num2Get = (float)$_GET["num2"];

            $somaGet = 0;

            if($_GET["operacao"] === 'add'){
                $somaGet = $num1Get + $num2Get;
            }

            if($_GET["operacao"] === 'sub'){
                $somaGet = $num1Get - $num2Get;
            }

            echo "soma get: " . htmlspecialchars($somaGet) . "<br>";
        } else {
            echo "insira os inputs <br>";
        }
    }

    if(empty($_POST) && empty($_GET)){
        echo "preencha algum input, por favor <br>";
    }

?>

