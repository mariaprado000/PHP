<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
<form action="listaprod.php" method="get">
  <label for="Produto">Produto</label><br>
  <input type="text" name="Produto" id="Produto" placeholder="redija aqui" required><br>
  <br>

  <label for="Marca">Marca</label><br>
  <input type="text" name="Marca" id="marca" placeholder="redija aqui" required><br>
  <br>



  <label for="Tamanho">Tamanho</label><br>
  <select id="tamanho" name="Tamanho">
    <option value="GG">P</option><br>
    <option value="G">M</option>
    <option value="M">G</option>
    <option value="P">GG</option>
</select><br>
<br>







<label for="precoV">Preço de Venda</label><br>
<input type="number" name="PrecoV" id="precov" placeholder="redija aqui" required><br>
<br>

<label for="precoC">Preço de Compra</label><br>
<input type="number" name="PrecoC" id="precoc" placeholder="redija aqui" required><br>
<br>

<label for="cor">Cor</label><br>
<input type="text" name="Cor" id="cor" required="blue"><br>
<br>

<label for="sexo">Genero</label><br>
<input type="radio" name="Genero" id="genero">
<label for="homem">Masculino</label><br>
<input type="radio" name="Genero" id="genero">
<label for="mulher">Feminino</label><br>
<input type="radio" name="Genero" id="genero">
<label for="preferencia">Para todos</label><br>
<br>

<label for="Modelo">Modelo</label><br>
<input type="text" name="Modelo" id="modelo" placeholder="redija aqui" required><br>
<br>

<label for="DataC">Data de Compra</label><br>
<input type="date" name="DataC" id="datac" max="2024-07-09"required>

<br>
<br>
<input type="submit" value="Salvar">

</form>
</body>
</html>