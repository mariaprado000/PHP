<?php
  $var= "vazia";
        echo "variavel \$var é nula/vazia!<br>";
    
    $var= "Bill Gates";
    if (is_string ($var )) {
        echo "variavel \$var é um string!<br>";
    }
    $var = 12;
    if(is_integer($var)) {
        echo "Variável \$var é um inteiro!<br>";
    }
    $var = false;
    if(is_bool($var)) {
        echo "Variável \$var é booleana!";
    }
    // is_float(), is_array(), is_object()
    ?>