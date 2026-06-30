<?php 
    require_once "Pagamento.php";

    class PagamentoPix implements Pagamento{
    public function realizarPagamento($valor){
        echo "Pagamento Via Pix. ";
        echo "Valor R$: " . $valor;
    }
}