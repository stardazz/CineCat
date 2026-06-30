<?php 
    require_once "Pagamento.php";

    class PagamentoCartao implements Pagamento{
    public function realizarPagamento($valor){
        echo "Pagamento Via Cartão. ";
        echo "Valor R$: " . $valor;
    }
}