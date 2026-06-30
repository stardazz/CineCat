<?php

require_once "Ingresso.php";

class IngressoVip extends Ingresso{

    private $brinde;

    public function __construct($numero, $tipo, $sessao, $brinde){
        parent::__construct($numero, $tipo, $sessao);
        $this->brinde = $brinde;
    }

    public function getBrinde(){
        return $this->brinde;
    }

    public function setBrinde($brinde){
        $this->brinde = $brinde;
    }

    public function gerarIngresso(){
        parent::gerarIngresso();
        echo "Brinde: " . $this->brinde . "<br>";
    }
}