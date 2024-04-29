<?php

class Personnage{

    //Attributs
    private $_force = 40;
    private $_classe = "Plombier";
    private $_couleurCasquette = "Rouge";

    private $_vie = 100;

    //Constructeur
    public function __construct($force,$couleur){
        //$this->_force = $force;
        $this->setForce($force);
        $this->setCouleurCasquette($couleur);

    }


    //Methodes
    public function getForce(){
        return $this->_force;
    }
    public function setForce($force){
        $this->_force = $force;
    }

    public function getCouleurCasquette(){
        return $this->_couleurCasquette;
    }
    public function setCouleurCasquette($couleur){
        $this->_couleurCasquette = $couleur;
    }

    public function getClasse(){
        return $this->_classe;
    }

    public function getInfo(){
        return "ce personnage a une force de ".$this->_force." est de classe ".$this->_classe." et a une  casquette de couleur ".$this->_couleurCasquette.".";
    }

}

$mario = new Personnage(70, "rouge");
echo $mario -> getForce();
echo "<br>";

$mario -> setForce(10);
echo $mario -> getForce();
echo "<br>";

echo $mario -> getClasse();
echo "<br>";

echo $mario -> getCouleurCasquette();
echo "<br>";

echo $mario -> getInfo();
echo "<br>";

