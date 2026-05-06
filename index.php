<?php
    // Incluir os arquivos das classes
        require "Cliente.php";
        require "Filme.php";
        require "Ingresso.php";
        require "Sala.php";
        require "Sessao.php";

    // Instanciar os objetos das classes
    $meuCliente = new Cliente("Emanuel", 175.422.239-39);
    $meuFilme = new Filme("As branquelas", "2hrs", "+10");
    $meuIngresso = new Ingresso(38, "Meia", "19:00");
    $minhaSala = new Sala(2, "100 pessoas");
    $minhaSessao = new Sessao("19:00", 15.00, "As branquelas", 2);

    // Instanciar um objeto da classe Venda
    $minhaVenda = new Venda($meuProduto, $meuComprador, $meuVendedor);

    // Concretizar uma venda
    $minhaVenda->concretizarVenda();

    // Cancelar uma venda
    $minhaVenda->cancelarVenda();