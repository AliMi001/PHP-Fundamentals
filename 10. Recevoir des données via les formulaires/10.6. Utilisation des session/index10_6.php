<?php
session_start();
if (!empty($_POST['pseudo'])) {
    $pseudo = $_POST['pseudo'];

    // Nettoyer l'entrée avant de la définir dans un session
    $pseudo = htmlspecialchars($pseudo);

    $_SESSION['pseudo'] = $pseudo;

    
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
    <h1>Entrez Votre pseudo</h1>

    <form method="POST" action="index10_6.php">
        <table>
            <tr>
                <td>Pseudo</td>
                <td><input type="text" name="pseudo"></td>
            </tr>
        </table>
        <button type="submit">Se connecter</button>
    </form>

    <?php
    if (!empty($_SESSION['pseudo'])) {
         // Récupérer le pseudo de la session et l'afficher
        $savedPseudo = htmlspecialchars($_SESSION['pseudo']);
        echo '<h2> Hello ' . $savedPseudo . '</h2>';
    }
    ?>
</body>
</html>
