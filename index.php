<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Array laços</title>
</head>
<body>
    <h1>array-laços</h1>
    <h2>exemplo 01</h2>
    
    <pre>
    <?php
        $A1=array ("prado", "neves", "carol");
        echo $A1[0];
        echo $A1[1];

     
        ?>
    </pre>
    <h2>array com for</h2>
    <pre>
    <?php
    $A2=array("10","9","8","7");
     echo "$A2[0]<br>";
     echo "$A2[1]<br>";
     ?>
    </pre>

    <h2>Impressão com for</h2>
    <pre>
    <?php
        $A3=array("maria", "maria", "prado");
        for($i=0; $i<(count($A3)); $i++){
            echo $i;
            echo "$A3[$i] <br> "; 
         }
         ?>
    </pre>

    <h2>Impressão com foreach</h2>
    <pre>
        <?php
    foreach($A3 as $dados){
        echo $dados; 
     }

    ?>
 </pre>
 <h2>Impressão com for</h2>
 <pre>
    <?php
    for($a=0; $a<2; $a++){
        echo$A1[$a];
    }
    ?>
 </pre>

 <h2> Array: Definição Explicita(com chave)</h2>
 <pre>
 <?php
 $a4=array( "fabio" =>25, "pedro" =>44, "savio" =>12, "Prado" =>73  );

                 foreach($a4 as $dados){
                    echo "$dados<br>"; }
                 ?>
                 </pre>
                 <h2> Array: foreach com chave valor</h2>
 <pre>
 <?php
foreach($a4 as $chave => $valor){
    echo "$chave: tem $valor anos <br>";
}

                 
                 ?>
                 </pre>

       <h2> exemplo print </h2>
 <pre>
    <?php
    print_r($a4);
    ?>
 </pre>

 <h2 id="h22">Array Multidimensional: Definição explicita </h2>
 <pre id="pre22">
    <?php
    $alunos= array("maria"=>
                          array("endereco"=> "Rua Chile 1046",
                                "bairro"  => "Rebouças"  ),
                 "João"=>
                           array("endereco"=> "Rua Iapó 234",
                                      "bairro"=> "Prado Velho"), 
                 "zeca"=>
                           array("endereco"=> "Rua Pesqueiro 1046",
                                     "bairro"=> "São Cristovão"  )
    );                              
print_r ($alunos ["maria"]["endereco"]);
 
print_r ($alunos ["João"]["endereco"]);

print_r ($alunos ["zeca"]["endereco "]);

    
?>
 </pre>



</body>

</html>