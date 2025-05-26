<?php

    namespace namespaces\model;

    use namespaces\abst\VeiculoMotorizado;
    use namespaces\inter\TransportarCarga;

    class Caminhao extends VeiculoMotorizado implements TransportarCarga{

        public float $capacidadeCargaKg;

        public float $cargaAtual;

        public function __construct(string $marca, string $modelo, float $capacidadeCargaKg){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->capacidadeCargaKg = $capacidadeCargaKg;
            $this->cargaAtual = 0.0;
        }

        public function ligarMotor() : string{
            return "O motor {$this->modelo} está ligado";
        }

        public function carregar(float $carga): void{

            $limite = $carga + $this->cargaAtual;

            if($limite >= $this->capacidadeCargaKg){
                echo "O caminhão não pode ser carregado";
                return;
            }

            $this->cargaAtual += $carga;

            echo "O caminhão está sendo carregado com {$carga}Kg <br>Carga atual: {$this->cargaAtual}Kg<br>";
        }

        public function descarregar(float $carga) : void{

            $this->cargaAtual -= $carga;

            echo "O caminhão está sendo descarregado com a carga: {$carga}Kg <br>Carga atual: {$this->cargaAtual}Kg<br>";
        }

    }

?>