<?php
    /*$nombre=(int)readline("Entrez un nombre (entrez 0 pour arrêter) : ");
    while($nombre !== 0){
        echo "Voici votre nombre : ". $nombre . "\n";
        $nombre=(int)readline("Entrez un nombre (entrez 0 pour arrêter) : ");
    }*/
    
    $nombre=(int)readline("Entrez un nombre entre 0 et 10 pour gagner un lot : ");
    $numéroGagnant = rand(0,10);
    while($nombre !== $numéroGagnant){
        echo "Mauvais numéro, vous n'avez pas gagné !". "\n";
        $nombre=(int)readline("Retentez votre chance, entrez un nombre à nouveau : "); 
    }
    echo "Bravo !!! \nVous avez enfin trouvé le numéro gagnant ! \nC'était le numéro $numéroGagnant";
    
    /*
    $mot = readline("Entrez un mot : ");
    while($mot !== "stop"){
        $mot = readline("Entrez un mot : ");
    }
    echo "Vous avez quitté le programme !!!"
    */
    /*
    for($i=0; $i < 10;$i++){
        echo $i . "<br>";
    }
    */
    /*
    $notes = [18,13,5,9,10];
    for ($i=0; $i < sizeof($notes); $i++) { 
        echo $notes[$i]. "/20 <br>";
    }*/
    /*$nombre = [11,18,99,17,65220,6485,78,97,48,2,112];
    for ($i=0; $i < sizeof($nombre); $i++) { 
        if($nombre[$i]% 2 ==0){
            echo "$nombre[$i] est pair <br>";
        }
    }*/
    /*$mois = ["Janvier","Février", "Mars", "Avril", "Mai", "Juin", "Juillet",
            "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];
    for ($i=1; $i < sizeof($mois); $i+=2) { 
        echo $mois[$i]." ";
    }*/
    $notes = [18,13,5,9,10];
    /*foreach ($notes as $laNote) {
        echo $laNote . " ";
    }*/
    /*$cuicui = [
        'firstname' => 'Lara',
        'lastname' => 'Croft',
        'sexe' => 'F',
        'dateOfBirth' => "24/10/1995",
        'city'=> 'London'
    ];
    foreach ($cuicui as $nacera =>$julien) {
        echo $nacera .' : ' . $julien. '<br>';
    }*/

    

    /*$users = [
        'firstname' => 'Lara',
        'lastname' => 'Croft',
        'sexe' => 'F',
        'dateOfBirth' => "23/10/1995",
        'notes' => [18,13,5,10,9],
        'city'=> 'London'
    ];
    foreach ($users as $key => $element) {
        if (is_array($element)){
            echo $key.' : [';
            foreach($element as $note){
                echo $note. "/20 ";
            }
            echo "]<br>";
        }else{
            echo $key . ' : '. $element . '<br>';
        }       
    }*/

    /*$mois = ["Janvier","Février", "Mars", "Avril", "Mai", "Juin", "Juillet",
            "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];
    foreach($mois as $lemois){
        echo "$lemois - ";
    }*/
    /*
    $notes = [0,14,8,10,7,19,6,20,13];
    foreach($notes as $note){
        if ($note > 10){
            echo "Tu as réussi avec la note de $note/20 <br>";
        }else if($note === 10){
            echo "Tu as eu tout pile la moitié $note/20 <br>";
        }else{
            echo "Tu as raté avec la note de $note/20 <br>";
        }
    }
    */
/*
    $classe = [
        [
            'firstname' => "Julien",
            'lastname' => "Dunia",
            'notes' => [8, 15, 12]
        ],
        [
            'firstname' => "Hakima",
            'lastname' => "Darmouch",
            'notes' => [18, 5, 10]
        ],
        [
            'firstname' => "Christian",
            'lastname' => "Bale",
            'notes' => [7, 19, 5]
        ]
    ];*/
    $notes = [0,14,8,10,7,19,6,20,13];
    //var_dump($notes);
    /*$moyenne;
    for($i=0; $i < sizeof($classe);$i++){
        foreach ($classe[$i] as $key => $value) {
            echo "$key : ";
            if (!is_array($value)){
                echo "$value <br>";
            }else{
                $moyenne=0;
                for($y = 0; $y < sizeof($value); $y++){
                    $moyenne = $moyenne +$value[$y];
                }
                echo "Moyenne " .($moyenne/sizeof($value)) ."<br>";
            }
        }  
        echo "<br>";
    }
    */

                
    /*
    $tab = [];
    $shams = "";
    while($shams !== "stop"){
        $shams =readline("Entrez un nouveau mot ou taper \"stop\" pour arreter : ");
        if($shams !== "stop"){
            $tab[]= $shams;
        }
    }
    foreach($tab as $mot){
        echo "$mot, ";
    }*/

?>