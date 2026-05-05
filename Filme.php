<?php
    class Filme {
        private $titulo;
        private $duracao;
        private $classificacao;

        public function __construct($titulo, $duracao, $classificacao) {
            $this->titulo = $titulo;
            $this->duracao = $duracao;
        }

        public function __toString() {
            return $this->descricao;
        }
    }