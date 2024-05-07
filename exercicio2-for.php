<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="amor.css">
</head>
<body>

<?php

$alunos= array ("Prado", "sávio", "Pessoa", "Afonso", "Amor");
echo "exemplo com for <br>";
for ($i=0; $i<(count ($alunos)); $i++){
    if($i==4){
        echo "$alunos[$i]  <br>";    
    }


}

?>
    
</body>
</html>

