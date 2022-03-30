<?php 
    require "Voiture.php";
    require "Cuicui.php";

    /*$maVoiture = new Voiture();
    var_dump($maVoiture);*/
    /*
    $date1 = new DateTime();
    $date2 = new DateTime("12/02/1999");
    $tab1= array();
    $tab2= array(1,5,8);
    var_dump($date1, $date2,$tab1,$tab2);
    */


    $monCuicui= new Cuicui();
    //$monCuicui->accelerer();
    //$monCuicui->demarrer();
    $monCuicui->changerCouleur("Rouge");
    //var_dump($monCuicui);
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
    $maVoiture3 = new Voiture("Noire",1750.40,10000 );
    echo "La voiture 3 <br>";
    echo "Couleur : " . $maVoiture3->obtenirCouleur() ."<br>";
    echo "Poids : " . $maVoiture3->obtenirPoids() ." Kg<br>";
    echo "Prix : " . $maVoiture3->obtenirPrix() ." Euros<br>";
    */

    /* 
    //exo 2 pdf 11
    $maVoiture4 = new Voiture("Bleue",1050.30,2999 );
    $maVoiture5 = new Voiture("Beige",2200,17500 );
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
    echo $maVoiture6;


   
   
?>