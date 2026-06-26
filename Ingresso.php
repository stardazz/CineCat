<?php
    require_once "Sessao.php";

    class Ingresso {

        private $numero;
        private $tipoIngresso;
        private $sessao;

        public function __construct($numero, $tipoIngresso, $sessao) {
            $this->numero = $numero;
            $this->tipoIngresso = $tipoIngresso;
            $this->sessao = $sessao;
        }

        public function getNumero() {
            return $this->numero;
        }

        public function setNumero($numero) {
            $this->numero = $numero;
        }

        public function getTipoIngresso() {
            return $this->tipoIngresso;
        }

        public function setTipoIngresso($tipoIngresso) {
            $this->tipoIngresso = $tipoIngresso;
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
            echo "Tipo: {$this->tipoIngresso}<br>";
            echo "Preço: " . $this->sessao->getPreco() . "<br>";
            echo "Filme: " . $this->sessao->getFilme()->getTitulo() . "<br>";
            echo "Sala: " . $this->sessao->getSala()->getNumero() . "<br>";
            echo "Horário: " . $this->sessao->getHorario() . "<br><br>";
        }
    }