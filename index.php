<?php
    // Incluir os arquivos das classes
        require "Comprador.php";
        require "Produto.php";
        require "Venda.php";
        require "Vendedor.php";

    // Instanciar os objetos das classes Produto, Vendedor e Comprador
    $meuProduto = new Produto("Livro", 54.90);
    $meuVendedor = new Vendedor("Ana", 20.00);
    $meuComprador = new Comprador("Julia", 500.00);

    // Instanciar um objeto da classe Venda
    $minhaVenda = new Venda($meuProduto, $meuComprador, $meuVendedor);

    // Concretizar uma venda
    $minhaVenda->concretizarVenda();

    // Cancelar uma venda
    $minhaVenda->cancelarVenda();