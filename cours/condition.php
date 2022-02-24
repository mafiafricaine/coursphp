<?php

/*$age = readline(' Veuillez votre age : ');
if (is_numeric($age)) {
    if ($age == 18) {
        echo "Vous avez " . $age . " ans " . "bienvenu dans l’âge adulte";
    } elseif ($age < 18) {
        echo ("Vous avez moins de 18 ans");
    } elseif ($age > 18) {
        echo "Vous êtes un adulte et vous avez " . $age . " ans";
    }
} else {
    echo ("Valeur non numerique");
}*/
/*$st = 5.5;
 $note = '8dsf';// il convertira en 8
 $note2 = "ahd";//il donnera 0 
 if ($note2 == 0){
  //  echo "Bien joué vous avez réussi !";
 }else{
    // echo "C’est dommage, vous feriez mieux la prochaine fois";
 }
 echo $somme;*/
/*$nom = 'Mickaël';
$age = 17;
$gars = true;
$taille = 1.75;*/
//$note ="sjhqfhd";
//$sexe=readline("Entrez votre sexe : ");
/*echo 'Bonjour à tous.<br/> Mon vrai nom n\'est pas Toto.<br/> Mon vrai nom est ' . $nom . '<br/> J\'ai ' . $age . ' ans et je mesure ' . $taille . 'm.<br/> Et comme mon nom l\'indique, je suis ';
if ($gars == true) {
    echo 'un garçon.</p>';
} else {
    echo 'une fille. </p>';
}*/
//$note = (int)readline('Entrez votre note : ');
/*if ($note >= 10) {
    if ($note == 10){
        echo "Vous avez tout juste 10";
    }else{
        echo "Bien joué vous avez réussi !";
    }
}else{
    echo "C’est dommage, vous feriez mieux la prochaine fois";
}*/


/*if ($note > 10) {
    echo "Bien joué vous avez réussi !";
} else if($note === 0) {
    echo "Tu es nul";
}else{
    echo "C’est dommage, vous feriez mieux la prochaine fois";
}
echo $note;*/
/*if ($sexe == "M"){
    echo "vous êtes un homme";
}else if($sexe == "F"){
    echo "vous êtes une femme";
}else{
    echo "vous êtes un autre";
}*/
$action = (int)readline("Entrez une action : ('1 : Attaquer, 2 : Defendre, 3 : Se soigner, 4 : Fuir, 5 : Ne rien faire) : ");
if ($action === 1){
    echo "Vous attaquez";
}else if($action === 2){
    echo "Vous défendez";
}elseif($action === 3){
    echo "Vous vous soignez";
}elseif($action === 4){
    echo "Vous fuyez";
}elseif($action === 5){
    echo "Vous ne faites rien";
}else{
    echo "Relancez le programme et Entrez une action 1,2,3,4 ou 5";
}
/*switch($action){
    case 1:
        echo "Vous attaquez !";
        break;
    case 2:
        echo "Vous défendez !";
        break;
    case 3:
        echo "Vous vous soignez !";
        break;
    case 4:
        echo "Vous fuyez !";
        break;
    case 5:
        echo "Vous ne faites rien !";
        break;
    default:
    echo "Relancez le programme et Entrez une action 1,2,3,4 ou 5";
}

