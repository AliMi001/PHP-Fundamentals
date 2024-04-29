<?php

    // boucle For

    for( $i = 0; $i < 10; $i++ ){
        echo "Voici une ligne du réglement du lycée.<br/>";
    }


    $num = 5;
    $factorial = 1;
    

    for ($i = 1; $i <= $num ; $i++) {
        $factorial *= $i;
    }

    echo "Le factorielle de ".$num." est: ". $factorial;



?>