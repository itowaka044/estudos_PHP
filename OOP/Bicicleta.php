<?php

    class Bicicleta extends Veiculo{

        public bool $temMarchas;

        public function __construct(string $marca, string $modelo, int $ano, bool $temMarchas){

            parent::__construct($marca, $modelo, $ano);
            $this->temMarchas = $temMarchas;

        }

        public function pedalar() : string{
            return "A {$this->modelo} está sendo pedalada.";
        }
    }

?>