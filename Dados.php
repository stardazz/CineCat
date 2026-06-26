<?php

    require_once "Filme.php";
    require_once "Sala.php";
    require_once "Sessao.php";
    require_once "Ingresso.php";
    require_once "IngressoVIP.php";
    require_once "Cliente.php";
    require_once "Pagamento.php";
    require_once "PagamentoPix.php";
    require_once "PagamentoCartao.php";

    // Dados do formulário
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $filmeEscolhido = $_POST["filme"];
    $tipoIngresso = $_POST["tipoIngresso"];
    $pagamento = $_POST["pagamento"];
    $brinde = $_POST["brinde"];

    // Objetos do sistema
    $filme = new Filme($filmeEscolhido, 180, "12 anos");
    $sala = new Sala(5, 120);
    $sessao = new Sessao("20:00", 30.00, $filme, $sala);

    // Verifica o tipo de ingresso
    if ($tipoIngresso == "VIP") {

        $ingresso = new IngressoVIP(101, "VIP", $sessao, $brinde);

    } else {

        $ingresso = new Ingresso(101, $tipoIngresso, $sessao);

    }

    // Cria o cliente
    $cliente = new Cliente($nome, $cpf);

    // Verifica a forma de pagamento
    if ($pagamento == "Pix") {

        $formaPagamento = new PagamentoPix();

    } else {

        $formaPagamento = new PagamentoCartao();

    }

?>
    <h2>Compra realizada com sucesso!</h2>

    <?php

    echo "<strong>Cliente:</strong> " . $cliente->getNome() . "<br>";
    echo "<strong>CPF:</strong> " . $cliente->getCpf() . "<br><br>";

    $filme->exibirDetalhes();
    $sala->exibirSala();
    $sessao->exibirSessao();
    $formaPagamento->realizarPagamento($sessao->getPreco());
    $cliente->comprarIngresso($ingresso);