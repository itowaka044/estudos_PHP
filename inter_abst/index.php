<?php

    spl_autoload_register(function($nomeClasse){
        $nomePath = __DIR__ . "/{$nomeClasse}.php";

        if(file_exists(($nomePath))){
            require_once $nomePath;
        } else {
            echo "erro ao encontrar path";
        }

    });

    $caminhao = new Caminhao("scania", "model1", 5000.0);

    echo $caminhao->ligarMotor() . "<br>" . $caminhao->acelerar() . "<br>";

    $caminhao->carregar(1000.5) . "<br>";

    $caminhao->descarregar(500.2);



?>