<?php
    //Connexion à la BD
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=formation_users;charset=utf8","root","");
    }catch(Exception $e){
        die("erreur: ".$e->getMessage());
    }

    /**
     * On a deux tables:
     * la table users (id, prenom, nom, serie_preferee)
     * et la table jobs(id, id_user, metier)
     */

    // AJouter un metier
    /*
    $requete = $bdd->exec('INSERT INTO jobs(id_user, metier) VALUES(1,"Ecrivain")');
    $requete = $bdd->exec('INSERT INTO jobs(id_user, metier) VALUES(2,"priogrameur")');
    $requete = $bdd->exec('INSERT INTO jobs(id_user, metier) VALUES(3,"Policier")');
    $requete = $bdd->exec('INSERT INTO jobs(id_user, metier) VALUES(4,"pdg")');
    
    */
    

    //Afficher les informations en uitilsant les jointure intern

    //En utlisant where */
    /* 
    $requete = $bdd->query("SELECT prenom, nom, 
                        serie_preferee, metier 
                         FROM users, jobs 
                         WHERE users.id = jobs.id_user");
    */
    //En utlisant join */
    $requete = $bdd->query("SELECT prenom, nom, 
                        serie_preferee, metier 
                         FROM users AS u
                         INNER JOIN jobs AS j
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