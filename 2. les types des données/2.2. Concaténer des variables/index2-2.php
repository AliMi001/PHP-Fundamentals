<?php
    //concaténation de variables

    $direBonjour = "Hello";
    $destination = "World";

    echo $direBonjour;
    echo $destination; // déconceillé

    echo '<br>';

    echo "$direBonjour $destination.";// plus cours plus propre

    echo '<br>';
    echo $direBonjour.' '. $destination; // la plus utilisée

    echo '<br>';
    echo $direBonjour,' ', $destination; 

    

?>