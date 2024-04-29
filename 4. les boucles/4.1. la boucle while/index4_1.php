<?php
    //Boucles While
    $ligne = 0;
    while($ligne<10){
        echo "Voici une ligne du réglement du lycée.<br/>";
        $ligne++;
    }
    
    
    $num = 5;
    $factorial = 1;
    $i = 1;

    while ($i <= $num) {
        $factorial *= $i;
        $i++;
    }

    echo "Le factorielle de ".$num." est: ". $factorial;

?>