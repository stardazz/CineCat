<?php
    class Comprador {
        private $nome;
        private $verba;

        public function __construct($nome, $verba) {
            $this->nome = $nome;
            $this->verba = $verba;
        }

        public function comprar() {
            echo "<p>" . $this->nome . " realizou a compra."; 
        }

        public function __toString() {
            return $this->nome;
        }
    }