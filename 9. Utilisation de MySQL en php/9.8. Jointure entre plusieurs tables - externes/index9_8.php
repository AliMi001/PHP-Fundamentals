<?php
    //Connexion à la BD
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=formation_users;charset=utf8","root","");
    }catch(Exception $e){
        die("erreur: ".$e->getMessage());
    }

    
    

    //Afficher les informations en uitilsant les jointure extern

    //En utlisant LEFT JOIN ou Right JOIN */
    $requete = $bdd->query("SELECT prenom, nom, 
                        serie_preferee, metier 
                         FROM users AS u
                         LEFT JOIN jobs AS j
                         ON u.id = j.id_user");


    echo  '<table border style="">
             <tr>
                <th> Prénom </th>
                <th> Nom </th>
                <th> Série préférees </th>
                <th> Métier </th>
             </tr>';
           
    while ($donnees = $requete ->fetch()){ // tant qu'il y a une nouvelle entré à lire faites le suivant
        echo '<tr>
                    <th>' .$donnees["prenom"].' </th>
                    <th>'.$donnees["nom"]. ' </th>
                    <th>'.$donnees["serie_preferee"].'</th>
                    <th>'.$donnees["metier"].'</th>

              </tr>';


    }
    $requete -> closeCursor();
    echo '</table>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9.2. Récupérer des données et les affichées</title>
</head>
<body>
    
</body>
</html>