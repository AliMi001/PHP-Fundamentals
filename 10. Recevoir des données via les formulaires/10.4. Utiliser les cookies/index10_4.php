<?php
if (!empty($_POST['pseudo'])) {
    $pseudo = $_POST['pseudo'];

    // Nettoyer l'entrée avant de la définir dans un cookie
    $pseudo = htmlspecialchars($pseudo);

    // Set the cookie
    setcookie('pseudo', $pseudo, time() + 365 * 24 * 3600, null, null, false, true); // true pour activer le http only: pour vous protéger des cookie qui vient des site tiers
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

    <form method="POST" action="index10_4.php">
        <table>
            <tr>
                <td>Pseudo</td>
                <td><input type="text" name="pseudo"></td>
            </tr>
        </table>
        <button type="submit">Se connecter</button>
    </form>

    <?php
    if (!empty($_COOKIE['pseudo'])) {
         // Récupérer le pseudo du cookie et l'afficher
        $savedPseudo = htmlspecialchars($_COOKIE['pseudo']);
        echo '<h2> Hello ' . $savedPseudo . '</h2>';
    }
    ?>
</body>
</html>
