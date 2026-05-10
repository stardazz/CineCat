<?php
    require_once "Filme.php";
    require_once "Sala.php";
    require_once "Sessao.php";
    require_once "Ingresso.php";
    require_once "Cliente.php";

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $nomeFilme = $_POST['filme'];
    $tipo = $_POST['tipo'];

    $filme = new Filme($nomeFilme, 120, "12 anos");
    $sala = new Sala(2, 80);
    $sessao = new Sessao("19:30", 25.00, $filme, $sala);
    $ingresso = new Ingresso(rand(1, 999), $tipo, $sessao);
    $cliente = new Cliente($nome, $cpf);
    $cliente->comprarIngresso($ingresso);
