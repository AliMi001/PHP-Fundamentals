<?php
// Include the class file
require_once 'class/Personnage.php';

// Now you can use the class

$mario = new Personnage("Mario",45, "rouge");

echo $mario -> getInfo();

$luigi = new Personnage("Luigi",40,"verte");
echo $luigi -> getInfo();

$mario->frapper($luigi);
$luigi->frapper($mario);


?>
