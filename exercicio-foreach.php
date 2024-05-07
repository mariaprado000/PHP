<?php

    $Aluno1 = array("Luis","22","RuaX","advogado","Guanambi");
    $Aluno2 = array("bruna", "25", "RuaY", "dentista","Guanambi");
    $Aluno3 = array("Rayfran", "20", "RuaZ", "pediatra", "Guanambi");

    echo "[foreach]:   ";
    foreach ($Aluno1 as $dado){
        echo "$dado  ";
    }
    echo "<br>"; 

    echo "[foreach]: ";
    foreach ($Aluno2 as $dado){
        echo "$dado  ";
    }
    echo "<br>";

    
    echo "[foreach]:  ";
    foreach ($Aluno3 as $dado){
        echo "$dado  ";
    }
      ?> 