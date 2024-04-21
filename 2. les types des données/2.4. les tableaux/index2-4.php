<?php

    // à utiliser pour stocker les données tirées de la base de donnée via les requêtes SQL

    //ça aide à ne pas refaire de requête vers votre base de données
    
    $identite = array( // "key" => "value"
       "id"     => 15,
       "prenom" => "Ahmed",
       "nom"   => "Mohamed",   
       "age"   => 20
    );
    
    echo 'Bonjour'.' '.$identite['prenom'].' '.$identite['nom'].' !<br>';

    // si on utilise pas les clés
    $identitePersonne = array(15,"Ahmed", "Mohamed", 20);
    // 0 => 15
    // 1 => 'Ahmed'
    //..etc
    echo 'Bonjour'.' '.$identitePersonne[1].' '.$identitePersonne[2].' !<br>';
 
?>