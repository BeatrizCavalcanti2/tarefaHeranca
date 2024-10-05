<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Abstrata</title>
</head>
<body>
    <form action="testaBebida.php" method="post">

        <label for="nome">Nome do vinho:</label>
        <input type="text" name="nomevinho" id="nome"><br>
        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" id="tipo"><br>
        <label for="preco">Preço:</label>
        <input type="number" name="precovinho" id="preco"><br>

        <button type="submit" name="okvinho">OK</button>
        <button type="submit" name="vervinho">Veja seu vinho</button>
        <button type="submit" name="verprecovinho">Verificar Preço</button>

        <label for="nome">Nome do Refrigerante:</label>
        <input type="text" name="nomerefri" id="nomerefri">
        <label for="retornavel">Retornavel?</label>
        <input type="checkbox" name="retornavel" id="retornavel">
        <label for="preco">Preço:</label>
        <input type="number" name="precorefri" id="precorefri">

        <button type="submit" name="okrefri">OK</button>
        <button type="submit" name="verefri">Veja seu Refrigerante</button>
        <button type="submit" name="verprecorefri">Verificar Preço</button>

        <label for="nome">Nome do Suco:</label>
        <input type="text" name="nomesuco" id="nomesuco">
        <label for="tipo">Sabor</label>
        <input type="text" name="sabor" id="sabor">
        <label for="preco">Preço:</label>
        <input type="number" name="precosuco" id="precosuco">

        <button type="submit" name="oksuco">OK</button>
        <button type="submit" name="versuco">Ver Suco</button>
        <button type="submit" name="verprecosuco">Verificar Preço</button>



    </form>
</body>
</html>