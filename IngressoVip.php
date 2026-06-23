<?php   
     class IngressoVip extends Ingresso{
        private $brinde;
        
        public function __construct($numero, $tipo, $sessao){
            parent:: __construct($numero, $tipo, $sessao);
            $this->brinde = new Brinde ($brinde);
        }

        public function getBrinde() {
            return $this->brinde;
        }

        public function setBrinde($brinde){
            $this->brinde = $brinde;
        }

        public function gerarIngresso(){
            parent:: 
        }
    }