<?php
    //Connexion à la BD
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=formation_users;charset=utf8","root","");
    }catch(Exception $e){
        die("erreur: ".$e->getMessage());
    }

    //modifier un utilisateur
    $requete =  $bdd->exec("UPDATE users SET 
                            serie_preferee = 'The big bang theory' WHERE prenom='Alain'");
    

    //Afficher les informations
    $requete = $bdd->query("SELECT * 
                            FROM users
                            ");

    echo  '<table border style="">
             <tr>
                <th> Prénom </th>
                <th> Nom </th>
                <th> Série préférees </th>

             </tr>';
           
    while ($donnees = $requete ->fetch()){ // tant qu'il y a une nouvelle entré à lire faites le suivant
        echo '<tr>
                    <th>' .$donnees["prenom"].' </th>
                    <th>'.$donnees["nom"]. ' </th>
                    <th>'.$donnees["serie_preferee"].'</th>

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