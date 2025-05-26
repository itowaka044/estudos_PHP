<?php

    spl_autoload_register(function ($className) {

        $filePath = "C:/xampp/htdocs/teste/{$className}.php";

        if(file_exists($filePath)){
            require_once $filePath;
        } else {
            echo "arquivo não encontrado";
        }

    });

    $moto = new Moto("honda", "cg", 2020, 160);
    $bicicleta = new Bicicleta("caloi", "basico", 2020, false);

    echo $moto->empinar() . "<br>" . $moto->exibirDetalhes() . "<br>";

    echo $bicicleta->pedalar() . "<br>" . $bicicleta->exibirDetalhes() . "<br>";

?>