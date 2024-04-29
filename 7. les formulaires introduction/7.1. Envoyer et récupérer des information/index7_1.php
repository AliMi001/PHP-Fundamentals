<?php
    //Formulaire

    if(isset($_POST["prenom"]) && isset($_POST["nom"])){
        echo 'Bonjour '.$_POST["prenom"].' '.$_POST["nom"].' !';
    }

    echo '<form method = "post" action = "index7_1.php">
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

    /**
     * 
     * faire très attention.Pourquoi? * Parce que là un hacker peut pirater votre site Internet .
     * c'est à dire que là rien n'est sécurisé.
     */



?>