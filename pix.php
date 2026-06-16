<?php 
    class pix implements Interface{
    public function realizarPagamento($valor){
        echo "Pagamento Via Pix";
        echo "Valor R$: " . $valor;
    }
    }