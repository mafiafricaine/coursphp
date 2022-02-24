<?php
    $notes = [18,13,5,9,10];
    $somme = $notes[0]+$notes[1]+$notes[2]+$notes[3]+$notes[4];
    $moyenne = $somme/5;
    //echo 'La somme donne : ' .$somme. "<br>". 'La moyenne est : ' . $moyenne ;
    $animal = ["chien","chat", "Elephant", "tortue"];
    //echo $animal[1] . $animal[3];
    $jourDeSemaine =["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    //echo $jourDeSemaine[0] ." ". $jourDeSemaine[5] ." ". $jourDeSemaine[2];
    $tab2dim =["James", "Bond", "M", "7/7/2007",["Lundi", "Mardi",
     "Mercredi", "Jeudi","Vendredi", "Samedi", "Dimanche"], "London"];
    /*echo "Nom : " . $tab2dim[1] . "\n" . 
         "Prenom : " . $tab2dim[0] . "\n" . 
         "Sexe : " . $tab2dim[2] . "\n" .
         "Date de naissance : " . $tab2dim[3] . "\n" . 
         "Ville : " . $tab2dim[5] . "\n" .
         "Hier nous étions : " . $tab2dim[4][6];    
    ;*/

    $users = [
        'firstname' => 'Lara',
        'lastname' => 'Croft',
        'sexe' => 'F',
        'dateOfBirth' => "23/10/1995",
        'notes' => [18,13,5,10,9],
        'city'=> 'London'
        ];
        $users["firstname"]="Edward";

        echo $users["firstname"] . "<br>". $users['lastname'];
?>