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

        public function __toString() {
            return $this->titulo;
        }
    }