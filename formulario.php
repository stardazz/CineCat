<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Compra de Ingresso</title>
    </head>
    <body>

    <h2>Compra de Ingresso</h2>

    <form action="index.php" method="POST">

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
        <select name="tipo">
            <option value="Inteira">Inteira</option>
            <option value="Meia">Meia</option>
        </select>
        <br><br>

        Tipo do ingresso:
        <select name="tipo">
            <option value="Normal">Normal</option>
            <option value="Vip">Vip</option>
        </select>
        <br><br>

        Forma de Pagamento: 
        <select name="tipoPagamento">
            <option value="pix">Pix</option>
            <option value="Cartao">Cartão</option>
        </select>
        <br><br>

        <input type="submit" value="Comprar">

    </form>

    </body>
</html>