<?php 
    require_once "Pagamento.php";

    class PgamentoPix implements Pagamento{
    public function realizarPagamento($valor){
        echo "Pagamento Via Pix";
        echo "Valor R$: " . $valor;
    }
    }