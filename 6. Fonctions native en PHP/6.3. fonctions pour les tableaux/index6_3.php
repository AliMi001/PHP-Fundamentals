<?php
    //Fonctions natives pour les tableaux
    $array = array("Stendhal", "Arnold", "Steve");

    //array_flip
    $array_2 = array_flip($array);
    echo $array_2["Stendhal"];
    echo "<br>";

    //array_key_exists
    if(array_key_exists(0, $array)){
        echo "YES <br/>";
    }

    //count
    echo count($array).'<br>';

    //sort
    sort($array);

    foreach($array as $name){
        echo $name.'<br>';
    }

    /**
     * https://www.php.net/manual/fr/ref.array.php
     */


?>      