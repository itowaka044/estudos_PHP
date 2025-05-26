<?php

    class Moto extends Veiculo{
        public int $cilindradas;

        public function __construct(string $marca, string $modelo, int $ano, int $cilindradas){
            parent::__construct($marca, $modelo, $ano);
            $this->cilindradas = $cilindradas;
        }

        public function empinar() : string{
            return "A {$this->modelo} empinou";
        }

        public function exibirDetalhes(): string{

            return parent::exibirDetalhes() . "cilindradas: " . $this->cilindradas;

        }
    }

?>