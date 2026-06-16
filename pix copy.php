<?php 
    class Cartao implements Interface{
    public function realizarPagamento($valor){
        echo "Pagamento Via Cartao";
        echo "Valor R$: " . $valor;
    }
    }