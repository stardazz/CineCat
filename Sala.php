<?php
    class Sala {

        private int $numero;
        private int $capacidade;

        public function __construct($numero, $capacidade) {
            $this->numero = $numero;
            $this->capacidade = $capacidade;
        }

        public function getNumero() {
            return $this->numero;
        }

        public function setNumero($numero) {
            $this->numero = $numero;
        }

        public function getCapacidade() {
            return $this->capacidade;
        }

        public function setCapacidade($capacidade) {
            $this->capacidade = $capacidade;
        }

        public function exibirSala() {
            echo "<h3>Sala</h3>";
            echo "Número: {$this->numero}<br>";
            echo "Capacidade: {$this->capacidade}<br><br>";
        }
    }