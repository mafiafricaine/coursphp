<?php
/*
    $lol = "Ok";
    $nb = 12;
    $nb2 = 18;
    $nb3 = 52;
    $moyenne = ($nb+$nb2+$nb3)/3;
    echo "La moyenne <br>". $nb .", \t" . $nb2 .', '. $nb3 .' est égale à ' .$moyenne;
    */


// $notes = [18, 13, 5, 9, 10];
$tab = [
    "Julien",
    "Dunia",
    "Bruxelles",
    "18/11/2000",
    ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
    "Homme"
];
//echo $tab[1];
$users = [
    'firstname' => 'Lara',
    'lastname' => 'Croft',
    'sexe' => 'F',
    'dateOfBirth' => "23/10/1995",
    'notes' => [18, 13, 5, 10, 9],
    'city' => 'London'
];
//$users["firstname"]="Edward";

// $users['notes'][5]=20;
//var_dump($users['notes']);
/*$note = readline("Veuillez introduire un chiffe : ");
            if ($note >= 10) {
                echo "Bien joué vous avez réussi !";
            } else if($note == 0) {
                echo "Tu es nul";
            }else{
                echo "C’est dommage, vous feriez mieux la prochaine fois";
            }*/
/*$action = (int)readline("Entrez une action : ('1 : Attaquer, 2 : Defendre, 3 :
Se soigner, 4 : Fuir, 5 : Ne rien faire) : ");
if ($action === 1) {
    echo "Vous attaquez";
} else if ($action === 2) {
    echo "Vous défendez";
} elseif ($action === 3) {
    echo "Vous vous soignez";
} elseif ($action === 4) {
    echo "Vous fuyez";
} elseif ($action === 5) {
    echo "Vous ne faites rien";
} else {
    echo "Relancez le programme et Entrez une action 1,2,3,4 ou 5";
}
*/
/*
$heure = (int)readline('Entrez une heure : ');
if (($heure > 8 and $heure <=12) || ($heure >= 14 && $heure < 18)) {
    echo "Le magasin sera ouvert à $heure heures";
} else {
    echo "Le magasin sera fermé à " . $heure . " heures";
}*/
/*
$nombre = (int)readline("Entrez un nombre (entrez 0 pour arrêter) : ");
while ($nombre !== 0) {
    echo "Voici votre nombre : " . $nombre . "\n";
    $nombre = (int)readline("Entrez un nombre (entrez 0 pour arrêter) : ");
}
*/
/*
$nombre = (int)readline("Entrez un nombre entre 0 et 10 pour gagner un lot : ");
$numéroGagnant = rand(0, 10);
while ($nombre !== $numéroGagnant) {
    echo "Mauvais numéro, vous n'avez pas gagné !" . "\n";
    $nombre = (int)readline("Retentez votre chance, entrez un nombre à nouveau : ");
}
echo "Bravo !!! \nVous avez enfin trouvé le numéro gagnant ! \nC'était le numéro $numéroGagnant";
*/

if(isset($title)):
    echo $title;
 else:
   echo "Mon site";
 endif;
//$tab = [18, 13, 5, 10, 9];
//echo $tab;