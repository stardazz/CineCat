<?php
    require_once "Filme.php";
    require_once "Sala.php";
    require_once "Sessao.php";
    require_once "Ingresso.php";
    require_once "Cliente.php";
    require_once "PagamentoPix.php";

    $filme = new Filme("As branquelas", 180, "12 anos");
    $sala = new Sala(5, 120);
    $sessao = new Sessao("20:00", 30, $filme, $sala);
    $ingresso = new Ingresso(101, "Inteira", $sessao);
    $cliente = new Cliente("Amanda", "123.456.789-00");
    $pagamento = new PagamentoPix(46);

    $filme->exibirDetalhes();
    $sala->exibirSala();
    $sessao->exibirSessao();
    $pagamento->realizarPagamento($sessao->getPreco());
    $cliente->comprarIngresso($ingresso);