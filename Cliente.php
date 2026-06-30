<?php
    require_once "Ingresso.php";

    class Cliente {
        private $nome;
        private $cpf;

        public function __construct($nome, $cpf) {
            $this->nome = $nome;
            $this->cpf = $cpf;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getCpf() {
            return $this->cpf;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        public function comprarIngresso($ingresso) {
            echo "<h2>Compra realizada com sucesso!</h2>";
            echo "Cliente: {$this->nome}<br>";
            $ingresso->gerarIngresso();
        }
    }