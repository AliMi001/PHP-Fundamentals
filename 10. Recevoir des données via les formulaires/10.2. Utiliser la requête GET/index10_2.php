<?php
    //Connexion à la BD
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=formation_users;charset=utf8","root","");
    }catch(Exception $e){
        die("erreur: ".$e->getMessage());
    }

    /**
     * La méthode GET passe les réponses saisies via l'URL tandis que la méthode POST passe les paramètres dans le corps de la requête.
     */

    //Ajouter un nouvel utilisateur
    if (isset($_GET['prenom']) && isset ($_GET['nom']) && isset($_GET['serie'])){
        $prenom = $_GET['prenom'];
        $nom = $_GET['nom'];
        $serie = $_GET['serie'];

        $requete = $bdd->prepare('INSERT INTO users(prenom, nom, serie_preferee) VALUES(?,?,?)') or die(print_r($bdd->errorInfo()));
        $requete-> execute(array($prenom, $nom, $serie));
        header('location:../');
    }

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
    echo '</table>';

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Ajouter un utilisateur </h1>
    <form method = "GET" action="index10_2.php">
        <table>
            <tr>
                <td>Prénom</td>
                <td> <input type="text" name="prenom" ></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td> <input type="text" name="nom" ></td>
            </tr>
            <tr>
                <td>Série préférée</td>
                <td> <input type="text" name="serie" ></td>
            </tr>
        </table>
        <button type="submit">Ajouter</button>

    </form>
</body>
</html>