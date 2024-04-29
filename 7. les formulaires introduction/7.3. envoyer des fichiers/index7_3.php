<?php
    // Envoi fichier en php
    /*
    $_FILES['image']['name']; //nom
    $_FILES['image']['type']; //type
    $_FILES['image']['size']; //taille
    $_FILES['image']['tmp_name']; // emplacement temporaire
    $_FILES['image']['error']; //erreur
    */

    if (isset($_FILES["image"]) && $_FILES['image']['error'] == 0) {
        // Check file size (limit: 3 MB)
        if ($_FILES['image']['size'] <= 3000000) {
            $informationImage = pathinfo($_FILES['image']['name']);
            $extensionImage = strtolower($informationImage['extension']);
            $extensionsArray = array('png', 'gif', 'jpg', 'jpeg', 'jfif');
    
            // Check if file extension is valid
            if (in_array($extensionImage, $extensionsArray)) {
                // Move the uploaded file to the appropriate directory
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploaded/' . time() . basename($_FILES['image']['name']));
                echo 'Upload successful';
            } else {
                echo 'Invalid file extension. Allowed extensions are: png, gif, jpg, jpeg';
            }
        } else {
            echo 'File size exceeds the limit of 3 MB';
        }
    }
    

    echo '<form method = "post" action = "index7_3.php" enctype="multipart/form-data">
        <p> 
            <h1>Formulaire</h1>
            <input type="file" name="image"/>
            <button type="submit"> Envoyer </button>
        </p>
    </form>';



?>