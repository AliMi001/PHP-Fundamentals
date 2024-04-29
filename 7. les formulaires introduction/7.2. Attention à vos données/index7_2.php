<?php
    /**
     * Tout ce que lutilisateur mettra Eh bien code PHP va l'exécuter.
     * faille XSS.
     
    if(isset($_POST["prenom"]) && isset($_POST["nom"])){
        echo 'Bonjour '.$_POST["prenom"].' '.$_POST["nom"].' !';
    }

    echo '<form method = "post" action = "index7_2.php">
        <p> 
            <table>
                <tr>
                    <td> Prénom </td>
                    <td> <input type = "text" name="prenom" /> </td>
                </tr>
                <tr>
                    <td> Nom </td>
                    <td> <input type = "text" name="nom" /> </td>
                </tr>
                
            </table>
            <button type="submit"> Envoyer </button>
        </p>
    </form>
    ';

     */

     //solution:

     if(isset($_POST["prenom"]) && isset($_POST["nom"])){

        //solution: 1er tester les données en créant des variable protégées
        
        $prenom = htmlspecialchars($_POST["prenom"]);
        $nom = htmlspecialchars($_POST["nom"]);

        //2eme Verifier que ce n'est que des caratères alphabétiques

        echo 'Bonjour '.$prenom.' '.$nom.' !';
    }

    echo '<form method = "post" action = "index7_2.php">
        <p> 
            <table>
                <tr>
                    <td> Prénom </td>
                    <td> <input type = "text" name="prenom" /> </td>
                </tr>
                <tr>
                    <td> Nom </td>
                    <td> <input type = "text" name="nom" /> </td>
                </tr>
                
            </table>
            <button type="submit"> Envoyer </button>
        </p>
    </form>';


?>