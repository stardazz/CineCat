<?php 
    class Venda {
        private $p; // Objeto da classe Produto (associação)
        private $c; // Objeto da classe Comprador (associação)
        private $v; // Objeto da classe Venda (associação)

        public function __construct($p, $c, $v) {
            $this->p = $p;
            $this->c = $c;
            $this->v = $v;
        }

        public function concretizarVenda() {
            echo "<p>" . $this->p . " foi vendido.";
            $this->v->vender();
            $this->c->comprar();
        }

        public function cancelarVenda() {
            echo "<p style='color: red'>Venda CANCELADA!!!";
        }
    }