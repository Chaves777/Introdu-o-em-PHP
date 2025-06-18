<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {
    if(isset($_POST["produtName"])) {
        $name = $_POST["produtName"];
        echo $name . "<br>";
    }
    if(isset($_POST["categoria"])) {
        $categoria = $_POST["categoria"];
        echo $categoria  . "<br>";
    }
     if(isset($_POST["preco"])) {
        $preco = $_POST["preco"];
        echo $preco  . "<br>";
    }
     if(isset($_POST["estoque"])) {
        $estoque = $_POST["estoque"];
        echo $estoque  . "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - 1</title>
</head>
<body>
      <form method="POST">
        <label for="produtos">
            <p>Cadastrar produtos</p>
        </label>
        <input type="text" id="produtName" name="produtName" placeholder="Nome Do Produto">
        <br>
        <br>
        <input type="text" id="categoria" name="categoria" placeholder="Categoria Do Produto">
        <br>
        <br>
        <input type="text" id="preco" name="preco" placeholder="Preço Do Produto">
        <br>
        <br>
        <input type="text" id="estoque" name="estoque" placeholder="Quantidade Em Estoque">
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>