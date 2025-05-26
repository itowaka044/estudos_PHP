<?php

    spl_autoload_register(function($nomeClasse){

        $prefixoNamespace = 'namespaces\\';

        $baseDir = __DIR__ . "/";

        if(strncmp($prefixoNamespace, $nomeClasse, strlen($prefixoNamespace)) !== 0){
            echo "prefixo e nome da classe não batem";
            return;
        }

        $finalNomeClasse = substr($nomeClasse, strlen($prefixoNamespace));

        $nomePath = $baseDir . str_replace('\\' , '/', $finalNomeClasse) . ".php";



        if(file_exists(($nomePath))){
            require_once $nomePath;
        } else {
            echo "erro ao encontrar path";
        }

    });

    $caminhao = new namespaces\model\Caminhao("scania", "model1", 5000.0);

    echo $caminhao->ligarMotor() . "<br>" . $caminhao->acelerar() . "<br>";

    $caminhao->carregar(1000.5) . "<br>";

    $caminhao->descarregar(500.2);


    echo "<br>";


    use namespaces\model\Caminhao;


    $caminhao2 = new Caminhao("scania", "model2", 5000.0);

    echo $caminhao2->ligarMotor() . "<br>" . $caminhao2->acelerar() . "<br>";

    $caminhao2->carregar(1000.5) . "<br>";

    $caminhao2->descarregar(500.2);


?>