<?php


    /*$cuicui = [
        'firstname' => 'Lara',
        'lastname' => 'Croft',
        'sexe' => 'F',
        'dateOfBirth' => "24/10/1995",
        'city'=> 'London'
    ];
    var_dump($cuicui);*/
    /*
    $notes = [0,14,8,10,7,19,6,18,13];
    echo max($notes)."\n";
    echo min($notes);
    */
    
    /*
    $notes = [18,13,5,10,9];
    $maximum = max($notes);
    echo "Votre tableau est : [";
    for($i=0;$i < sizeof($notes);$i++){
        echo $notes[$i]. " "; 
    }
    echo "] <br>";
    echo "Voici la valeur max : $maximum";
    */
    
    /*
    $mot = readline("Veuillez entrez un mot : ");
    if($mot === strrev($mot)){
        echo "Votre mot est un palindrome et donne ". strrev($mot). " a l'envers";
    }else{
        echo "Votre mot renversé ne donne pas le même mot ".  strrev($mot);
    }
    */
    


    /*
    $mot = readline("Veuillez entrez un mot : ");
    $reverse = strrev($mot);
    if(strtoupper($mot) == strtoupper($reverse)){
        echo "Votre mot est un palindrome et donne ". strtoupper($reverse). " a l'envers";
    }else{
        echo "Votre mot renversé ne donne pas le même mot ".  strtoupper($reverse);
    }*/
    

    /*
    $notes = [18,10.6,5,10,9];
    $somme = array_sum($notes);
    $moyenne = $somme/sizeof($notes);
    echo "La somme donne $somme \nLa moyenne donne $moyenne";
    */

    $notes = [18,13,5,10,9];
    //Pour trier un tableau par ordre croissant
    //sort($notes);
    rsort($notes);
    var_dump($notes);
    /*arsort($notes);
    var_dump($notes);*/
    $notes2 = array_reverse($notes);
    echo "Voici votre tableau [ ";
  
    foreach($notes as $n){
        echo $n . " ";
    }
    echo "] <br>";
    echo "Voici votre tableau inversé [ ";
    foreach($notes2 as $n2){
        echo $n2 . " ";
    }
    echo "]";
    

//echo getrandmax();

?>