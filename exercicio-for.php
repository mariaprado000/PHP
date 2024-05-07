<?php

    $Aluno1 = array("Luis","22","RuaX","advogado","Guanambi");
    $Aluno2 = array("bruna", "25", "RuaY", "dentista","Guanambi");
    $Aluno3 = array("Rayfran", "20", "RuaZ", "pediatra", "Guanambi");

    

    echo "[for]:";
    for ($a=0;$a<(count($Aluno1)-1);$a++){
        echo"$Aluno1[$a]  ";
    }
?>