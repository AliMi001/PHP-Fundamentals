<?php
    // les opérateurs logiques
    $age = 16;

    if ($age > 17) {
        echo "Vous êtes majeur.";
    }

    if($age==18) { //'==' et pas '='
        echo $age, '<br>';
        echo "vous êtes enfin majeur.";
    }

    if ($age < 18){
        echo "Vous êtes mineur.";
    }
    /**Les opérateur de conditionnement
     * == EST EGAL
     * > EST SUPERIEUR strictement
     * < EST INFERIEUR strictement
     * <= EST INFERIEUR OU EGAL
     * >= EST SUPERIEUR OU EGAL
     * != EST DIFFERENT
     */
?>