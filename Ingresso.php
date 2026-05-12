<?php
    require_once "Sessao.php";

    class Ingresso {

        private $numero;
        private $tipo;
        private $sessao;

        public function __construct($numero, $tipo, $sessao) {
            $this->numero = $numero;
            $this->tipo = $tipo;
            $this->sessao = $sessao;
        }

        public function getNumero() {
            return $this->numero;
        }

        public function setNumero($numero) {
            $this->numero = $numero;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function getSessao() {
            return $this->sessao;
        }

        public function setSessao($sessao){
            $this->sessao = $sessao;
        }

        public function gerarIngresso() {
            echo "<h3>Ingresso</h3>";
            echo "Número: {$this->numero}<br>";
            echo "Tipo: {$this->tipo}<br>";
            echo "Preço: " . $this->sessao->getPreco() . "<br>";
            echo "Filme: " . $this->sessao->getFilme()->getTitulo() . "<br>";
            echo "Sala: " . $this->sessao->getSala()->getNumero() . "<br>";
            echo "Horário: " . $this->sessao->getHorario() . "<br><br>";
        }
    }