<?php
//$notes = [18,13,5,9,10];
//$notes = array(18,13,5,9,10);
//echo $notes[2];
//$tab = ["Jack", "Bauer",[18,13,5,9,10]];
// echo $tab[2][3];
/*$tab2dim = ["James", "Bond", "M", "7/7/2007",
   ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
    "London"]; 
    echo "Nom : " . $tab2dim[1] . "<br>" .
     "Prenom : " . $tab2dim[0] ."<br>" .
      "Sexe : " . $tab2dim[2] . "<br>" .
       "Date de naissance : " . $tab2dim[3] . "<br>" .
       "Ville : " . $tab2dim[5] . "<br>" .
       "Jour de hier : " . $tab2dim[4][0];
*/
$users = [
        'firstname' => 'Lara',
        'lastname' => 'Croft',
        'sexe' => 'F',
        'dateOfBirth' => "23/10/1995",
        'notes' => [18,13,5,10,9],
        'city'=> 'London',
        'jourDeSemaine' =>["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"]
    ];
    $moyenne = ($users['notes'][0]+$users['notes'][1]+$users['notes'][2]+$users['notes'][3]+$users['notes'][4])/5;
    $users['jourDeSemaine'][7]="neant";
    //print_r($users['notes']);
    echo $users['notes'];
    //echo $users['firstname'] . " " . $users['lastname'] . " " . $moyenne . " " . $users['jourDeSemaine'][3] . " ". $users['jourDeSemaine'][7] ;
//$users["firstname"]="Edward";
//  $users['notes'][5]=20;
//echo $users['firstname'] . ' '. $users['notes'][6] . ' ' ;  
//print_r($users['notes']);
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
];
$somme = $classe[2]['notes'][0] + $classe[2]['notes'][1] + $classe[2]['notes'][2];

//echo $somme/3;
$tab = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];


