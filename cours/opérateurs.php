<?php
/*
$heure = (int)readline('Entrez une heure : ');
    if(!(($heure > 8 AND $heure <= 12) || ($heure >= 14 && $heure < 18))){
        echo "Le magasin sera ouvert à $heure heures";
    }else{
        echo 'Le magasin sera fermé à ' . $heure ." heures";
    }*/
  
$users1 = [
    'firstname' => "Will",
    'lastname' => "Smith",
    'sexe' => "M",
    'age' => 53,
    'vaccinated' => true
];
$users2 = [
    'firstname' => "Lara",
    'lastname' => "Croft",
    'sexe' => "F",
    'age' => 17,
    'vaccinated' => true
];
$users3 = [
    'firstname' => "Marion",
    'lastname' => "Cotillard",
    'sexe' => "F",
    'age' => 46,
    'vaccinated' => true
];
$users=$users1;
if ($users['age'] > 17 && $users['vaccinated'] === true){
    echo "Bienvenue dans le club " . $users['firstname']. " ".  $users['lastname'] . "! <br> ";
    if($users['sexe']==="F"){
        echo "Prenez un bracelet rose";
    }else{
        echo "Prenez un bracelet bleu";
    }
}else{
    echo "Vous n'êtes pas majeure et vacciné";
}