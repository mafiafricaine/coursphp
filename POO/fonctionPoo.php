<?php
require "Voiture.php";
function laPlusCher(Voiture $voiture1, Voiture $voiture2): Voiture {
    if($voiture1->obtenirPrix() > $voiture2->obtenirPrix()){
        return $voiture1;   
    }
    return $voiture2;
}