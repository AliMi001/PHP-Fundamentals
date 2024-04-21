<?php
    $jour_numero = 5;
    $jour = "";
    
    switch ($jour_numero) {
        case 1:
            $jour = "Lundi";
            break;
        case 2:
            $jour = "Mardi";
            break;
        case 3:
            $jour = "Mercredi";
            break;
        case 4:
            $jour = "Jeudi";
            break;
        case 5:
            $jour = "Vendredi";
            break;
        case 6:
            $jour = "Samedi";
            break;
        case 7:
            $jour = "Dimanche";
            break;
        default:
            $jour = "Numéro de jour invalide";
            break;
    }
    
    echo "Le jour correspondant au numéro"." ". $jour_numero." ". "est ". $jour;
    

?>