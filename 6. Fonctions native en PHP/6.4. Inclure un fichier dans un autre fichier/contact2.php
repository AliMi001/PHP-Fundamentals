<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <?php
        require("src/header.php"); 
    ?>

    <Section  style = "Border: 1px solid pink; padding: 30px;">
    En PHP, include et require sont deux directives permettant d'inclure le contenu d'un fichier dans un autre fichier PHP. Cependant, ils diffèrent dans leur gestion des erreurs :

    1. include : Lorsque vous utilisez include pour inclure un fichier et que le fichier inclus est introuvable, PHP génère simplement un avertissement (warning) et continue l'exécution du script.
    2. require : Si vous utilisez require et que le fichier inclus est introuvable, PHP génère une erreur fatale (fatal error) et arrête l'exécution du script.
    En résumé, require est plus strict que include. Si vous êtes sûr que le fichier que vous incluez est essentiel au fonctionnement de votre script, utilisez require. Si le fichier inclus est facultatif, utilisez include.

    3. require_once fonctionne de manière similaire à require, mais avec une différence cruciale : il vérifie si le fichier a déjà été inclus, et s'il l'a été, il ne l'inclura pas une deuxième fois. Cela évite les problèmes de réinclusion de fichiers qui pourraient entraîner des erreurs de redéfinition de fonctions ou de constantes.

    Donc, si vous avez plusieurs fichiers inclus qui dépendent les uns des autres et vous voulez vous assurer qu'ils ne seront inclus qu'une seule fois, utilisez require_once. Cela garantit une meilleure organisation et évite les conflits potentiels.

    </Section>

    <footer  style = "Border: 1px solid pink; padding: 30px;">
        Le pied de page
    </footer>
</body>
</html>