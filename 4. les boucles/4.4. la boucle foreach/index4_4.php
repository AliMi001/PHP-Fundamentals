<?php
    // boucle: Foreach

    $user = array('Ahmed',
                'Ali',
                'Nadia',
                'Yassine',
                'Amina' );

    for ($i = 0; $i < 5; $i++){
        echo ($i+1).'. '.$user[$i].'<br/>';
    }
    echo '<br>';
    foreach ($user as $name){
        echo $name.'<br>';
    }

    echo '<br>';
    $student = array(
             'prenom' => 'Ahmed',
             'nom' => 'Mohamed',
              'age' => 23,
    );
    
    foreach ($student as $key => $value){
        echo $key.': '.$value.' <br>';
    }
echo '<br>';
    foreach ($student as $item){
        echo $item.'<br>';
    }



?>