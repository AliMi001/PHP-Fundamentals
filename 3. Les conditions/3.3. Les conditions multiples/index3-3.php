<?php
    //les condition multiples
    $pseudo = "Tintin";
    $mdp = 'Luune';

    if($pseudo == 'Tintin'){
        if ($mdp=="Lune"){
            echo "Mot de passe valide";
        }
        if ($mdp !="Lune"){
            echo "Mot de passe invalide";    
        }
    }
    echo "<br>";

    if ($pseudo == 'Tintin' && $mdp=="Lune" ){ //'AND' peut etre remplacé par '&&'
        echo "Mot de pass valide.";
    }
    
    echo "<br>";

    if ($pseudo == "Tintin" OR $pseudo=" David" ){
        echo "vous êtes Admin";
    }
    /**
     * AND : &&
     * OR : ||
     */

?>