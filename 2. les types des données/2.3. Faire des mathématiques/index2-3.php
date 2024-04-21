<?php
    // Operateurs
    $premierNombre = 5;
    $deuxiemeNombre = 25;

    //multiplication : *
    echo $premierNombre * $deuxiemeNombre;
    echo '<br>';

    //addition: +
    echo $premierNombre + $deuxiemeNombre;
    echo '<br>';

    //Soustraction: -
    echo $premierNombre - $deuxiemeNombre;
    echo '<br>';

    //division: /
    echo $deuxiemeNombre/ $premierNombre ;
    echo '<br>';

    // 
    $operationCalcul = ((5*5)/5)+158;
    echo $operationCalcul; // 163
    echo '<br>';

    $operationCalcul = $operationCalcul/5;
    echo $operationCalcul; //32.6
    echo '<br>';

    $operationCalcul *= 5; //équivalent à $operationCalcul = $operationCalcul*5;
    echo $operationCalcul; //163
    echo '<br>';

    //incrémentation
    $operationCalcul++;//équivalent à $operationCalcul = $operationCalcul+1;
    echo $operationCalcul; //164
    echo '<br>';

    $operationCalcul--; //équivalent à $operationCalcul = $operationCalcul-1;
    echo $operationCalcul; //163
    echo '<br>';

    //modulo: %
    $pair = 40;
    echo $pair % 2;
    echo '<br>';

    //exponentielle: **
    echo 2 ** 3; //8

?>