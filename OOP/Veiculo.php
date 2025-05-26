<?php

    class Veiculo{

        public string $marca;
        public string $modelo;
        public int $ano;

        public function __construct(string $marca, string $modelo, int $ano){

            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;

        }

        public function exibirDetalhes() : string{
            return "Marca: " . $this->marca
            . "<br> Modelo: " . $this->modelo
            . "<br> Ano: " . $this->ano;
        }

        
    }

?>