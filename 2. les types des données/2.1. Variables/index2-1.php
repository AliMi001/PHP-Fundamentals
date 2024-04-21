<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /**
         * utilisation de '$' pour indiquer qu'on a une variable.
         */
        $age_du_lyceen = 17 ; //il faut lui assigner une valeur sinon vous aurez une erreur si vous lui faite appel
        echo $age_du_lyceen;


        //type de variable: le typage est dynamique en PHP 

        $age = 18; //entier (int)
        echo "<br>";

        $taille = 1.8; //float 
        echo $age,"<br>", $taille;

        echo "<br>";
        
        $nom = "Ahmed"; //String
        echo $nom,"<br>";

        $nom = "\"Ahmed\"";
        echo $nom,"<br>";  
        $nom = '"Mohamed"';
        echo $nom, "<br>"; 

        $est_majeur = true; // boolean

        //convention internationale : camelCase naming convention
        
        $ageDuLyceen = 18; //premiere lettre en miniscule ... 
        
        
        ?>
</body>
</html>