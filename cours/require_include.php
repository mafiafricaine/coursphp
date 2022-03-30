<?php
    
    require_once "fonctionsReq.php";
 

    //require_once "fonctionsReq.php";
    //require "fonctionsReq.php";
    //require "sep.php";
    //include "fonctionsReq.php";
    //echo "Bien le Bonjour BonBon \n";

    /*if (ouiOuNon("Voullez vous faire une addition : ")){
        echo addition(10,15);
    }else{
        echo "Vous avez refusé de faire une addition. \nAurevoir !!";
    }*/

    /*//---exo 1---
    if (ouiOuNon("Voullez vous faire une Soustraction : ")){
        echo soustraction(10,15);
    }else{
        echo "Vous avez refusé de faire une soustraction. \nAurevoir !!";
    }
    */
    /*//---exo 2---
    if (ouiOuNon("Voullez vous faire une Multiplication : ")){
        echo multiplication(10,15);
    }else{
        echo "Vous avez refusé de faire une multiplication. \nAurevoir !!";
    }
    */
    /*//---exo 3---
    if (ouiOuNon("Voullez vous faire une Division : ")){
        echo division(10,2);
    }else{
        echo "Vous avez refusé de faire une division. \nAurevoir !!";
    }
    */
    /*//---exo 4---
    if (ouiOuNon("Voullez vous faire une addition : ")){
        $nbr1 = readline("Veuillez introduire un premier nombre : ");
        $nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
        if (is_numeric($nbr1) and is_numeric($nbr2)){
            echo addition($nbr1,$nbr2);
        }else{
            echo "Veuillez introduire 2 nombres";
        }   
    }else{
        echo "Vous avez refusé de faire une addition. \nAurevoir !!";
    }
    */
    //---exo 5---
    /*//soustraction
    if (ouiOuNon("Voullez vous faire une soustraction : ")){
        $nbr1 = readline("Veuillez introduire un premier nombre : ");
        $nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
        if (is_numeric($nbr1) and is_numeric($nbr2)){
            echo soustraction($nbr1,$nbr2);
        }else{
            echo "Veuillez introduire 2 nombres";
        }   
    }else{
        echo "Vous avez refusé de faire une soustraction. \nAurevoir !!";
    }
    */
    /*//multiplication
    if (ouiOuNon("Voullez vous faire une multiplication : ")){
        $nbr1 = readline("Veuillez introduire un premier nombre : ");
        $nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
        if (is_numeric($nbr1) and is_numeric($nbr2)){
            echo multiplication($nbr1,$nbr2);
        }else{
            echo "Veuillez introduire 2 nombres";
        }   
    }else{
        echo "Vous avez refusé de faire une multiplication. \nAurevoir !!";
    }
    */
    /*//----exo 6---
    if (ouiOuNon("Voullez vous faire une division : ")){
        $nbr1 = readline("Veuillez introduire un premier nombre : ");
        $nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
        if (is_numeric($nbr1) and is_numeric($nbr2)){
            while($nbr2 ==0 || !is_numeric($nbr2)){
                if($nbr2==0 && is_numeric($nbr2)){
                    echo "Vous avez tenter une division par 0, recommencer \n";
                }else{
                    echo "Vous avez introduis autre chose qu'un nombre\n";
                }
                $nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
            }
            echo division($nbr1,$nbr2);
        }else{
            echo "Veuillez introduire 2 nombres";
        }   
    }else{
        echo "Vous avez refusé de faire une division. \nAurevoir !!";
    }
    */
    /*//---exo 7---
    if (ouiOuNon("Voullez vous faire un calcule : ")){
        $cal = readline("Veuillez introduire un chiffre entre 1 et 4 (1 = Addition, 2 = Soustraction, 3 = Multiplication, 4 = Division) : ");
        if (is_numeric($cal) && ($cal >0 && $cal < 5)){
            
                $nbr1 = readline("Veuillez introduire un premier nombre : ");
                $nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
                if (is_numeric($nbr1) and is_numeric($nbr2)){
                    if($cal != 4){
                        echo calcule($nbr1,$nbr2,$cal); 
                    }else{
                        while($nbr2 ==0 || !is_numeric($nbr2)){
                            if($nbr2==0 && is_numeric($nbr2)){
                                echo "Vous avez tenter une division par 0, recommencer \n";
                            }else{
                                echo "Vous avez introduis autre chose qu'un nombre\n";
                            }
                            $nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
                        }
                        echo calcule($nbr1,$nbr2,$cal);
                    } 
                }else{
                    echo "Vous devez introduire 2 nombres";
                }
            }else{
                echo "Vous avez introduit autre chose qu'un chiffre entre 1 et 4";
            } 
    }else{
        echo "Vous avez refusé de faire un calcule. \nAurevoir !!";
    }
    */
    require "sep.php";
    echo "\n ok \n";
    require "sep.php";
    echo "\n blabla \n";
    require "sep.php";
    
?>