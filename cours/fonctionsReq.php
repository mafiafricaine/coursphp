<?php
    function ouiOuNon(?string $phrase = null) : bool{
        while(true){
            $reponse = readline($phrase . " - (o)ui/(n)on : " );
            if($reponse ==="o"){
                return true;
            }elseif($reponse === "n"){
                return false;
            }
        }
    }
    function estAdulte($age) : bool{
        if($age >=18){
            return true;
        }
        return false;
    }
    
    function estFemme($sexe) : bool{
        if($sexe == "F"){
            return true;
        }
        return false;
    }
    function addition($nb1,$nb2){
        return $nb1 + $nb2 ;
    }
    function soustraction($nb1,$nb2){
        return $nb1 - $nb2 ;
    }
    function multiplication($nb1,$nb2){
        return $nb1 * $nb2 ;
    }
    function division($nb1,$nb2){
        /*if ($nb2 == 0){
            echo "Votre deuxième nombre ne peut pas être égale à zero\n";
            return 0;
        }*/
        return $nb1 / $nb2 ;
    }
    function moyenne2nombre($a,$b){
        return addition($a,$b)/2;
    }
    function calcule($nb1,$nb2,$fct){
        switch($fct){
            case 1:
                return addition($nb1,$nb2);
                break;
            case 2:
                return soustraction($nb1,$nb2);
                break;
            case 3:
                return multiplication($nb1,$nb2);
                break;
            case 4:
                return division($nb1,$nb2);
                break;
                
        }
    }
    
    
?>