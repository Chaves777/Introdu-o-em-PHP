<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["name"])) {
        $name = $_POST["name"];
        echo $name . "<br>";
    }
    if (isset($_POST["produto"])) {
        $produto = $_POST["produto"];
        echo $produto . "<br>";
    }
    if (isset($_POST["avaliacao"])) {
        $avaliacao = $_POST["avaliacao"];
        echo $avaliacao . "<br>";
    }
    if (isset($_POST["mensagem"])) {
        $mensagem = $_POST["mensagem"];
        echo $mensagem . "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - 2</title>
</head>

<body>
    <form method="POST">
        <label for="feedback">
            <p>Feedback de produtos</p>
        </label>
        <label for="name">Digite seu nome:<br></label>
        <input type="text" id="name" name="name" placeholder="Nome">
        <br>
        <br>
        <label for="produto">Escolha um produto:<br></label>
        <select id="produto" name="produto">
            <option value="maçã">Maçã</option>
            <option value="banana">Banana</option>
            <option value="laranja">Laranja</option>
            <option value="uva">Uva</option>
        </select>
        <br>
        <br>
            <label for="avaliacao">Avalie o produto:<br></label>
            <input type="radio" id="star1" name="avaliacao" value="1" />
            <label for="star1">1</label>

            <input type="radio" id="star2" name="avaliacao" value="2" />
            <label for="star2">2</label>

            <input type="radio" id="star3" name="avaliacao" value="3" />
            <label for="star3">3</label>

            <input type="radio" id="star4" name="avaliacao" value="4" />
            <label for="star4">4</label>

            <input type="radio" id="star5" name="avaliacao" value="5" />
            <label for="star5">5</label>
        <br>
        <label for="mensagem">Comentários:<br></label>
        <textarea id="mensagem" name="mensagem" rows="4" cols="50" placeholder="Escreva aqui..."></textarea>
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>