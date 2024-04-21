<?php

    //3.6. L’expression IF ELSE IF ELSE
    $note = 15;

    if ($note >= 16) {
        $appreciation = "Très bien";
    } elseif ($note >= 14 && $note < 16) {
        $appreciation = "Bien";
    } elseif ($note >= 12 && $note < 14) {
        $appreciation = "Assez bien";
    } else {
        $appreciation = "Insuffisant";
    }
    
    echo "La note obtenue est"." ". $note." ".", ce qui est qualifié de "." ". $appreciation;

?>