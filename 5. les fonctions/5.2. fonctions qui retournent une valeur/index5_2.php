<?php

    // fonction qui retourne un résultat
    function Formule($x, $y) {

        $temp = $x * $y;
        $temp /= 5;
        $temp = $x + $temp - ($x + $y);
        return $temp;
        }


    $resultat = Formule(52, 74);
    echo $resultat.'<br>';

    

    // exercice:Une fonction pour calculer les racines d'une equation de 2nd degré : ax²+bx+c = 0

    function CalculerRacines($a, $b, $c){

        //Equation ou a==0?
        if($a==0){
           echo "Cette equation n'est pas du second degret"; 
           exit;
        }
        //Delta
        $delta = -4*$a*$c+$b**2;

        if ($delta < 0) {
            return "pas de solution";
        }

        elseif ($delta == 0) {
            return -$b/(2*$a);
        }
        
        else{
            return (-$b+sqrt($delta))/(2*$a)." ".(-$b-sqrt($delta))/(2*$a);
        }
    }

    
    echo CalculerRacines(0,7,1);
    echo "<br/>";
    echo CalculerRacines(1,2,3);
    echo "<br/>";
    echo CalculerRacines(1,2,1);
    echo "<br/>";
    echo CalculerRacines(5,7,1);
    


?>