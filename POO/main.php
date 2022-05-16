<?php 
    require "Voiture.php";
    require "Cuicui.php";
    require "Personne.php";
    require "Personnage.php";

    /*$maVoiture = new Voiture();
    var_dump($maVoiture);*/
    /*
    $date1 = new DateTime();
    $date2 = new DateTime("12/02/1999");
    $tab1= array();
    $tab2= array(1,5,8);
    var_dump($date1, $date2,$tab1,$tab2);
    */


    /*
    $maVoiture = new Cuicui("Verte", 450.0,1000 );
    $maVoiture3 = new Cuicui("Noire",1750.40,10000 );

    $maVoitureFinale = new Voiture("Bleue", 4200.5, 5005, "Mercedes");
    $maVoitureFinale->setMarque("BMW");
    
    echo $maVoitureFinale;
    */
    
    


    /*
    $maVoiture2->changerCouleur("Verte");
    $maVoiture2->changerPoids(600.95);
    $maVoiture2->changerPrix(15000);

    echo "La voiture 1 <br>";
    echo "Couleur : " . $maVoiture->obtenirCouleur() ."<br>";
    echo "Poids : " . $maVoiture->obtenirPoids() ." Kg<br>";
    echo "Prix : " . $maVoiture->obtenirPrix() ." Euros<br>";

    echo "La voiture 2 <br>";
    echo "Couleur : " . $maVoiture2->obtenirCouleur() ."<br>";
    echo "Poids : " . $maVoiture2->obtenirPoids() ." Kg<br>";
    echo "Prix : " . $maVoiture2->obtenirPrix() ." Euros<br>";

    if ($maVoiture->obtenirPrix() > $maVoiture2->obtenirPrix()){
        echo "La voiture " . $maVoiture->obtenirCouleur(). " est plus chere que la voiture " .$maVoiture2->obtenirCouleur() . "<br>";
        echo "Il y a une différence de prix de " . ($maVoiture->obtenirPrix() - $maVoiture2->obtenirPrix()) . " Euros";
    }else{
        echo "La voiture " . $maVoiture2->obtenirCouleur(). " est plus chere que la voiture " .$maVoiture->obtenirCouleur(). "<br>";
        echo "Il y a une différence de prix de " . ($maVoiture2->obtenirPrix() - $maVoiture->obtenirPrix()) . " Euros";
    }
    */
    
    //$monCuicui->accelerer();
    //$monCuicui->demarrer();
    //echo "Ma voiture est de couleur : ". $maVoiture->obtenirCouleur() ."<br>";
    //$maVoiture->changerCouleur("Gris");
    //echo "Ma nouvelle couleur : " . $maVoiture->obtenirCouleur();

    /*
    echo "Ma voiture est de couleur : ".$monCuicui->couleur . "<br>";
    echo "Elle a un poids de : ".$monCuicui->poids ." Kg" . "<br>";
    echo "Elle a un prix de : ".$monCuicui->prix ." Euros" . "<br>";
    $monCuicui->couleur = "Verte";
    echo "Ma nouvelle couleur de voiture est : ". $monCuicui->couleur . "<br>";
    */


    
   















    
    
    //var_dump($maVoiture->demarrer());
    //$maVoiture->accelerer();
    /*
    echo "Ma voiture est de couleur : ". $maVoiture->couleur . "<br>" . 
     "Elle a un poids de : ". $maVoiture->poids . " Kg <br>".
    "Elle a un prix de : " . $maVoiture->prix . " Euros <br>";
    */
    //$maVoiture->couleur = "Noire";
  
    //$maVoiture->changerCouleur("Rouge");
    
    //echo "Ma nouvelle couleur de voiture est : ". $maVoiture->couleur;
    //var_dump($maVoiture);

    /*
    //exo 7 pdf 10
    echo "Ma voiture est de couleur : " . $maVoiture->obtenirCouleur() ."<br>";
    $maVoiture->changerCouleur("Rouge");
    echo "J'ai changé la couleur de ma voiture en : " . $maVoiture->obtenirCouleur()."<br>";
    */

    /*
    //exo 9 pdf 10
    echo "L'ancien prix de ma voiture : " . $maVoiture->obtenirPrix() ." Euros <br>";
    $maVoiture->augmenterPrix(500);
    echo "Le nouveau prix de ma voiture : " . $maVoiture->obtenirPrix() ." Euros <br>";
    */
    /*
    exo 10 pdf 10
    $maVoiture2 = new Voiture();
    $maVoiture2->changerCouleur("Verte");
    $maVoiture2->changerPoids(600.95);
    $maVoiture2->changerPrix(5000);

    echo "La voiture 1 <br>";
    echo "Couleur : " . $maVoiture->obtenirCouleur() ."<br>";
    echo "Poids : " . $maVoiture->obtenirPoids() ." Kg<br>";
    echo "Prix : " . $maVoiture->obtenirPrix() ." Euros<br>";

    echo "La voiture 2 <br>";
    echo "Couleur : " . $maVoiture2->obtenirCouleur() ."<br>";
    echo "Poids : " . $maVoiture2->obtenirPoids() ." Kg<br>";
    echo "Prix : " . $maVoiture2->obtenirPrix() ." Euros<br>";

    if($maVoiture->obtenirPrix() > $maVoiture2->obtenirPrix()){
        echo "La voiture ". $maVoiture->obtenirCouleur() . " est plus chère que la voiture ". $maVoiture2->obtenirCouleur() ."<br>";
        echo "Il y a une difference de prix de " . ($maVoiture->obtenirPrix()-$maVoiture2->obtenirPrix()) . " Euros";
    }else{
        echo "La voiture ". $maVoiture2->obtenirCouleur() . " est plus chère que la voiture ". $maVoiture->obtenirCouleur() ."<br>";
        echo "Il y a une difference de prix de " . ($maVoiture2->obtenirPrix()-$maVoiture->obtenirPrix()) . " Euros";
    }
    */
/*-----------------------------------------------------------------*/
    /*
    //exo 1 pdf 11
    $maVoiture3 = new Cuicui("Noire",1750.40,10000 );
    echo "La voiture 3 <br>";
    echo "Couleur : " . $maVoiture3->obtenirCouleur() ."<br>";
    echo "Poids : " . $maVoiture3->obtenirPoids() ." Kg<br>";
    echo "Prix : " . $maVoiture3->obtenirPrix() ." Euros<br>";
    */
    


    /*
    //exo 2 pdf 11
    $maVoiture4 = new Voiture("Bleue",1050.30,2999 );
    $maVoiture5 = new Voiture("Beige",2200,17500 );
    echo "La voiture 4 <br>";
    echo "Couleur : " . $maVoiture4->obtenirCouleur() ."<br>";
    echo "Poids : " . $maVoiture4->obtenirPoids() ." Kg<br>";
    echo "Prix : " . $maVoiture4->obtenirPrix() ." Euros<br>";

    echo "La voiture 5 <br>";
    echo "Couleur : " . $maVoiture5->obtenirCouleur() ."<br>";
    echo "Poids : " . $maVoiture5->obtenirPoids() ." Kg<br>";
    echo "Prix : " . $maVoiture5->obtenirPrix() ." Euros<br>";
    */

    /*
    //exo 3 pdf 11
    $maVoiture6 = new Voiture("Jaune",1300.5,8000,"Audi");
    $maVoiture7 = new Voiture("Brune",1900.5,16000,"BMW");
    echo "La voiture 6 <br>";
    echo "Couleur : " . $maVoiture6->obtenirCouleur() ."<br>";
    echo "Poids : " . $maVoiture6->obtenirPoids() ." Kg<br>";
    echo "Prix : " . $maVoiture6->obtenirPrix() ." Euros<br>";
    echo "Marque : " . $maVoiture6->getMarque() ."<br>";

    echo "<br>";
    echo "La voiture 7 <br>";
    echo "Couleur : " . $maVoiture7->obtenirCouleur() ."<br>";
    echo "Poids : " . $maVoiture7->obtenirPoids() ." Kg<br>";
    echo "Prix : " . $maVoiture7->obtenirPrix() ." Euros<br>";
    echo "Marque : " . $maVoiture7->getMarque() ."<br>";
    */

    /*
    //exo 4 pdf 11
    $maVoiture6 = new Voiture("Jaune",1300.5,8000,"Audi");
    $maVoiture7 = new Voiture("Brune",1900.5,16000,"BMW");
    if ($maVoiture6->plusChere($maVoiture7)){
        echo "La voiture ". $maVoiture6->obtenirCouleur() . " est plus chère que la voiture ". $maVoiture7->obtenirCouleur() ."<br>";
        echo "Il y a une difference de prix de " . ($maVoiture6->obtenirPrix()-$maVoiture7->obtenirPrix()) . " Euros";
    }else{
        echo "La voiture ". $maVoiture7->obtenirCouleur() . " est plus chère que la voiture ". $maVoiture6->obtenirCouleur() ."<br>";
        echo "Il y a une difference de prix de " . ($maVoiture7->obtenirPrix()-$maVoiture6->obtenirPrix()) . " Euros";
    }
    */

    //$maVoiture8 = new Voiture("Grise", 975.8, 6450, "Mercedes");
    //echo $maVoiture8;

    /*
    //exo 5 pdf 11
    $personne1 = new Personne("Julien", 34, "M");
    $personne2 = new Personne("Sarah", 27, "F");
    $personne3 = new Personne("Mohamed", 15, "M");
    $personne4 = new Personne("Konchita", 40, "X");
    $personne5 = new Personne("Bruce", 45, "M");
    
    $personne5->setAge(13);

    $tabPersonne = [$personne1, $personne2, $personne3, $personne4, $personne5];
    foreach ($tabPersonne as $personne){
        echo $personne . "<br>";
    }

    $pers1 = $personne4;
    $pers2 = $personne3;

    if ($pers1->estPlusAgee($pers2)){
        echo $pers1->getPrenom() . " a ". $pers1->getAge() . " ans et est plus agée que " . $pers2->getPrenom() . " qui a " . $pers2->getAge() . " ans <br>";
    }else{
        echo $pers2->getPrenom() . " a ". $pers2->getAge() . " ans et est plus agée que " . $pers1->getPrenom() . " qui a " . $pers1->getAge() . " ans <br>";
    }
    */

    
    //exo 6 pdf 11
    $personnage1 = new Personnage("Ryu", (rand(5,10)*10), rand(10,50));
    $personnage2 = new Personnage("Ken", (rand(5,10)*10), rand(10,50));
    $personnage3 = new Personnage("Sub-Zero", (rand(5,10)*10), rand(10,50));
    $personnage4 = new Personnage("Jin Kazama", (rand(5,10)*10), rand(10,50));
    $mario = new Personnage("Mario", (rand(5,10)*10), rand(10,50));

    $tabPersonnage = [$personnage1, $personnage2, $personnage3, $personnage4, $mario];
    foreach ($tabPersonnage as $personnage){
        echo $personnage . "<br>";
    }

    $player1 = $personnage4;
    $player2 = $personnage1; 

    $tour = 0;
    $nbrCoups1=0;
    $nbrCoups2=0;
    while ($player1->estVivant() AND $player2->estVivant()){
        if ($tour % 2 == 0){
            $player1->lanceAttaque($player2);
            $nbrCoups1++;
        }else{
            $player2->lanceAttaque($player1);
            $nbrCoups2++;
        }
        $tour++;
    }
    if ($player1->estVivant()){
        echo "Le personnage " . $player1->getNom() . " a battu le personnage ". $player2->getNom() . 
             " en " . $nbrCoups1 . " coups. <br>Et il lui reste ". $player1->getVie() . " de points de vie"; 
    }else{
        echo "Le personnage " . $player2->getNom() . " a battu le personnage ". $player1->getNom() . 
             " en " . $nbrCoups2 . " coups. <br>Et il lui reste ". $player2->getVie() . " de points de vie"; 
    }
?>