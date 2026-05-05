<?php
    class Cliente {
        private $nome;
        private $cpf;

        public function __construct($nome, $cpf) {
            $this->nome = $nome;
            $this->cpf = $cpf;
        }

        public function comprarIngresso() {
            echo "<p>" . $this->nome . " comprou um Ingresso."; 
        }

        public function __toString() {
            return $this->nome;
        }
    }