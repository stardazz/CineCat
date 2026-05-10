<?php
    class Filme {
        private $titulo;
        private $duracao;
        private $classificacao;

        public function __construct($titulo, $duracao, $classificacao) {
            $this->titulo = $titulo;
            $this->duracao = $duracao;
            $this->classificacao = $classificacao;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function getDuracao() {
            return $this->duracao;
        }

        public function setDuracao($duracao) {
            $this->duracao = $duracao;
        }

        public function getClassificacao() {
            return $this->classificacao;
        }

        public function setClassificacao($classificacao) {
            $this->classificacao = $classificacao;
        }

        public function exibirDetalhes() {
            echo "<h3>Filme</h3>";
            echo "Título:  {$this->titulo} <br>";
            echo "Duração: {$this->duracao} minutos<br>";
            echo "Classificação: {$this->classificacao} <br><br>";
        }
    }