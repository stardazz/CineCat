<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Compra de Ingresso</title>
    </head>
    <body>

    <h2>Compra de Ingresso</h2>

    <form action="Dados.php" method="POST">

        Nome:
        <input type="text" name="nome" required>
        <br><br>

        CPF:
        <input type="text" name="cpf" required>
        <br><br>

        Filme:
        <select name="filme">
            <option value="Minecraft">Minecraft</option>
            <option value="Batman">Batman</option>
            <option value="As Branquelas">As Branquelas</option>
        </select>
        <br><br>

        Tipo do ingresso:
        <select name="tipoIngresso">
            <option value="Inteira">Inteira</option>
            <option value="Meia">Meia</option>
            <option value="Vip">VIP</option>
        </select>
        <br><br>

        Brinde:
        <select name="brinde">
            <option value="Pipoca Grande">Pipoca Grande</option>
            <option value="Refrigerante">Refrigerante</option>
            <option value="Combo">Combo Pipoca + Refrigerante</option>
        </select>
        <br><br>

        Forma de Pagamento: 
        <select name="pagamento">
            <option value="pix">Pix</option>
            <option value="Cartao">Cartão</option>
        </select>
        <br><br>

        <input type="submit" value="Comprar">

    </form>

    </body>
</html>