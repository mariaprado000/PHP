<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #css th{background-color: pink};
    
table, th, td {
  border: 1px solid;
}

table {
  width: 100%;
  
}
</style>
</head>
<body>
    <table id= css> 
        <tr>
            <th>produto</th>
            <th>tamanho</th>
            <th>marca</th>
            <th>preçov</th>
            <th>preçoc</th>
            <th>cor</th>
            <th>genero</th>
            <th>modelo</th>
            <th>Datacompra</th>

        </tr>
        <tr>
            <td><?php echo $_GET['Produto']?></td>
            <td><?php echo $_GET['Tamanho']?></td>
            <td><?php echo $_GET['Marca']?></td>
            <td><?php echo $_GET['PrecoV']?></td>
            <td><?php echo $_GET['PrecoC']?></td>
            <td><?php echo $_GET['Cor']?></td>
            <td><?php echo $_GET['Genero']?></td>
            <td><?php echo $_GET['Modelo']?></td>
            <td><?php echo $_GET['DataC']?></td>

        </tr>


    
</body>
</html>