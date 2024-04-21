<?php
    $age = 17;

    if ($age >= 18) {
        $resultat = "Majeur";
    } else {
        $resultat = "Mineur";
    }
    
    echo "La personne est".' '. $resultat;

?>