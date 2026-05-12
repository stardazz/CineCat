<?php
    require_once "Filme.php";
    require_once "Sala.php";

    class Sessao {

        private $horario;
        private $preco;
        private $filme;
        private $sala;

        public function __construct($horario, $preco, $filme, $sala) {
            $this->horario = $horario;
            $this->preco = $preco;
            $this->filme = $filme;
            $this->sala = $sala;
        }

        public function getHorario() {
            return $this->horario;
        }

        public function setHorario($horario) {
            $this->horario = $horario;
        }

        public function getPreco() {
            return $this->preco;
        }

        public function setPreco($preco) {
        if ($preco === 'Inteira') {
            $this->valor = 30;
        } else {
            $this->valor = 15;
        }
    }

        public function getFilme() {
            return $this->filme;
        }

        public function getSala() {
            return $this->sala;
        }

        public function exibirSessao() {
            echo "<h3>Sessão</h3>";
            echo "Horário: {$this->horario}<br>";
            echo "Preço: R$ {$this->preco}<br>";
            echo "Filme: " . $this->filme->getTitulo() . "<br>";
            echo "Sala: " . $this->sala->getNumero() . "<br><br>";
        }
    }