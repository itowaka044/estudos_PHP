<?php

    interface TransportarCarga{

        public function carregar(float $peso) : void;

        public function descarregar(float $peso) : void;


    }

?>