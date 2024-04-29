
<!--
On va voir comment on se connect:

on a les extension:
    - mysql_ => mySQL, vieilles (on les utilise plus)
    - mysqli_ => tjrs du mySQL, améliorées, utilisé de temps en temps
    - PDO => très sécurisée, mySQL, Oracle, PostgreSQL, plus utilisé dans le domaine du developement web.

Activer "PDO":
    - sélectionner en bas de votre bare à droite, cliquer sur wamp
    - puis cliquer sur php
    - puis cliquer sur extension php.
    - activer pdo_mysql

Via phpMyAdmin nous avons déjà créer une base de donnée nommée formation_user qui contient une table users.

-->

<?php
 /**
  * Pour se connecter à  une base on a besoin de spécifier:
  * Hote: localhost - sql.monserveur.com 
  * Nom de la base:  formation_users
  * login: "root".
  * MDP: "". // le mot de passe est vide par défaut dan wamp server 
  */

    try{
        $bdd = new PDO("mysql:host=localhost;dbname=formation_users;charset=utf8","root","");
    }catch(Exception $e){
        die("erreur: ".$e->getMessage());
    }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>