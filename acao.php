<?php
    require_once "Filme.php";
    require_once "Sala.php";
    require_once "Sessao.php";
    require_once "Ingresso.php";
    require_once "Cliente.php";

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $nomeFilme = $_POST['filme'];
    $tipoIngresso = $_POST['tipo'];

    if ($tipoIngresso == 'Inteira') {
        $preco = 30;
    }
    else {
        $preco = 15;
    }

    $filme = new Filme($nomeFilme, 120, "12 anos");
    $sala = new Sala(2, 80);
    $sessao = new Sessao("19:30", $preco, $filme, $sala);
    $ingresso = new Ingresso(rand(1, 999), $tipoIngresso, $sessao);
    $cliente = new Cliente($nome, $cpf);

    $filme->exibirDetalhes();
    $sala->exibirSala();
    $sessao->exibirSessao();
    $cliente->comprarIngresso($ingresso);
