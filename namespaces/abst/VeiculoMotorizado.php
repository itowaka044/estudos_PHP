<?php

    namespace namespaces\abst;

    abstract class VeiculoMotorizado{

        public string $marca;
        public string $modelo;

        public function __construct(string $marca, string $modelo){
            $this->marca = $marca;
            $this->modelo = $modelo;
        }
        
        public function acelerar() : string{
            return "O {$this->modelo} está acelerando.";
        }

        public abstract function ligarMotor() : string;

    }

?>