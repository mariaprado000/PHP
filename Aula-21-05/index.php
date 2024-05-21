<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">


</head><style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 5px solid rgb(170, 78, 127) ;
  text-align: left;
  padding: 8px;
}

tr {
  background-color: pink ;
}
</style>
<body>
<pre>
    <?php 


  $array= [
    'alunos'=>[
    ['id'=> 1,
    'nome'=> 'Prado',
    'idade'=> 17,
    'curso'=> 'neurociencia',
    'nota'=> 5
    ],
    ['id'=>2,
    'nome'=> 'Maria',
    'idade'=> 22,
    'curso'=> 'neuro',
    'nota'=> '11'
   ],
   ['id'=> 3,
   'nome'=> 'Neves',
   'idade'=> 10,
   'nota'=> 4
  ]
  ]
];
  print_r($array);

  print_r($array['alunos'][1]['curso'] );
?>

  <table>
        <tr>
            <th> id</th>
            <th> Nome </th>
            <th>idade</th>
            
        </tr>
        <tr>
            <td><?php print_r($array['alunos'][0]['id'])?></td>
            <td><?php print_r($array['alunos'][0]['nome'])?></td>
            <td><?php print_r($array['alunos'][0]['idade'])?></td>
          
        </tr>
        <tr>
            <td><?php print_r($array['alunos'][1]['id'])?></td>
            <td><?php print_r($array['alunos'][1]['nome'])?></td>
            <td><?php print_r($array['alunos'][1]['idade'])?></td>
       
        </tr>

        

    </table>

  <table>
<tr>
    <th>id</th>
    <th>Nome</th>
    <th>idade</th>
    <th>altura</th>
</tr>
    <?php for($a=0; $a<(count($array['alunos'])); $a++) { ?>
        
        <tr>
            <td><?php print_r($array['alunos'][$a]['id']);?></td>
        </tr>
    <?php } ?>

        </table>


<?php
for($a=0; $a<(count($array['alunos'])); $a++)

if(($array['alunos'][$a]['nota']) > 7){
echo ($array['alunos'][$a]['nome']);
echo '<br>';
}
     
?> 
 <pre>

</body>
</html>