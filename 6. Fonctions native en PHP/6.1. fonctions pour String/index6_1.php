<?php
    // fonction native pour les chaines de caractères
    $str = "Bienvenue sur la formation !";

    //strlen
    echo 'Nombre de caractères: '.strlen( $str ).'<br/>';

    //str_replace
    echo  'La chaine de caractères transformée: '.str_replace("Bienvenue", "Welcome", $str).'<br/>';

    //Strtolower
    echo strtolower( $str ).'<br/>';

    //strtoupper
    echo strtoupper( $str ).'<br/>';

    //substr
    echo substr( $str,0,9).'<br/>';

    /**ressources:
     * https://www.php.net/manual/fr/ref.strings.php
     */

?>