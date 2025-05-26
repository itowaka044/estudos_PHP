<?php

    function lerConteudoArquivo(string $caminhoArquivo){

        if(!file_exists($caminhoArquivo)){
            throw new Exception("O arquivo {$caminhoArquivo} não foi encontrado.");
        }

        if(!is_readable($caminhoArquivo)){
            throw new Exception("sem permissão de leitura para o arquivo {$caminhoArquivo}");
        }

        return file_get_contents($caminhoArquivo);

    }


    try{

        lerConteudoArquivo(__DIR__ . "/teste.php");

        // lerConteudoArquivo(__DIR__ . "/inexistente.php");

        lerConteudoArquivo("C:\Users\João Vitor Wakamori\OneDrive\Área de Trabalho\pasta_bloqueada");

    }catch(Exception $e) {

        echo "erro: " . $e->getMessage();

    }finally {

        echo "try catch finalizado.";

    }

?>