<?php



    /*
    function hello(){
        echo "ok";
        return "Hello World !!! <br>";
    }
    hello();
    */
   
    

     /*//----------------------exos 1 pdf 5 pages 3
    function hello($nom){
        echo "Hello ". $nom . " !!!<br>";
    }
    hello("Julien");
    hello("Robert");
    hello("Sanja");
    hello("Ellen");
    hello("Shams");
    */
    
    /*
    $tabNom = ["julien", "robert", "sanja", "ellen", "shams"];
    hello($tabNom);

    function hello($tableauDePrenom){
        /*
        foreach($tableauDePrenom as $prenom) {
            echo "hello ".$prenom."\n";
        }
        */
        /*
        for($i=0;$i < sizeof($tableauDePrenom);$i++){
            echo "Hello " . $tableauDePrenom[$i]  ;
        }
        */
        /*
        $nb =0;
        while($nb < sizeof($tableauDePrenom)){
            echo "Hello " . $tableauDePrenom[$nb] . "<br>";
            $nb= $nb+1;
        }
    }
        */
    
    
    
    

    /*//--------------exos 2
    function hello($nom){
        echo "Hello ". $nom . " !!!<br>";
    }
    $tab=["Julien", "Robert", "Sanja", "Ellen", "Shams"];
    foreach($tab as $prenom){
        hello($prenom);
    }
    */
    
    /*
    function hello($nom = null ){
        if ($nom != null){
            return "Hello ". $nom . " !!!<br>";
        }
         return "Hello World !!!<br>";
    }
    
    echo hello("Julien");
    echo hello();
    */
    
    

     /*//  ------------------exos 3
    function hello($nom = null){
        if ($nom != null){
            return "Hello ". $nom . " !!!";
        }
        return "Hello World !!!";
    }
    $prenom = readline("Veuillez introduire un prénom : ");
    $helloPrenom = hello($prenom);
    echo $helloPrenom;
    */
    

    /*//  ------------------exos 4
    function bienvenue($nom, $prenom, $email, $age){
        return "Bienvenue ". $nom . " ". $prenom . " !!!\nVous avez " .$age . " ans.\n"."Voici votre mail " .$email; 
    }
    $prenom = readline("Veuillez introduire un prénom : ");
    $nom = readline("Veuillez introduire un nom : ");
    $email = readline("Veuillez introduire un email : ");
    $age = readline("Veuillez introduire votre age : ");
    $helloPrenom = bienvenue($nom,$prenom,$email,$age);
    echo $helloPrenom;
    */
    
    /*//-------------exos 5
    function adulte($age){
        if($age >=18){
            echo "Vous êtes majeur";
        }else{
            echo "Vous êtes mineur";
        }
    }
    $nb = readline("Veuillez introduire votre age : ");
    adulte($nb);
    */

    /*// -----------------Exos 6
    function somme($nb1,$nb2){
        return $nb1 + $nb2 ;
    }
    
    $nbr1 = readline("Veuillez introduire un premier nombre : ");
    $nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
    //$moyenne = somme($nbr1,$nbr2)/2;
    echo $nbr1 . " additioné à " . $nbr2 . " donne ".  somme($nbr1,$nbr2);
    */
    

   /* // -----------------Exos 7
    function soustraction($nb1,$nb2){
        return $nb1 - $nb2 ;
    }
    $nbr1 = readline("Veuillez introduire un premier nombre : ");
    $nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
    echo $nbr1 . " soustrait à " . $nbr2 . " donne ".  soustraction($nbr1,$nbr2);
    */

    /*// -----------------Exos 8
    function multiplication($nb1,$nb2){
        return $nb1 * $nb2 ;
    }
    $nbr1 = readline("Veuillez introduire un premier nombre : ");
    $nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
    echo $nbr1 . " multiplié à " . $nbr2 . " donne ".  multiplication($nbr1,$nbr2);
    */

    /*// -----------------Exos 9
    function division($nb1,$nb2){
        return $nb1 / $nb2 ;
    }
    $nbr1 = readline("Veuillez introduire un premier nombre : ");
    $nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
    while($nbr2 ==0){
        echo "Vous avez tenter une division par 0, recommencer \n";
        $nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
    }
    echo $nbr1 . " divisé par " . $nbr2 . " donne ".  division($nbr1,$nbr2);
    */


    /*function add(...$tab){
        return array_sum($tab);
    }
    echo add(12,12,12,12,12,12,54);*/

    /*//-------exemple fonction dans fonction
    function addition($shams,$nacera){
        return $shams+ $nacera ;
    }
    function moyenne2nombre($a,$b){
        return addition($a,$b)/2;
    }
    $nbr1 = readline("Veuillez introduire un premier nombre : ");
    $nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
    echo "La moyenne de " .$nbr1 . " et " . $nbr2 . " donne ".  moyenne2nombre($nbr1,$nbr2);
    */

    /*//-----------Les types
    function typage(float $nombreDecimal,bool $booleen, int $entier, string $chaineCaractere, array $tableau) : void {
        return ;
    }
    */

    /*//-----------Exos 10
    function estAdulte(int $age) : bool{
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
    function affichage(array $tab) : void {
        foreach($tab as $key => $value){
            if($key == "Prenom"){
                echo $value;
            }elseif ($key == "Sexe"){
                if(estFemme($value)){
                    echo " est une femme ";
                }else{
                    echo " est un homme ";
                }
            }elseif($key == "Age"){
                if(estAdulte($value)){
                    echo " majeur(e) agé(e) de " . $value ." ans.<br>";
                }else{
                    echo " mineur(e) agé(e) de " . $value . " ans.<br>";
                }
            }
        }
    }
    $users = [
        [
            "Prenom" => "Sarah",
            "Sexe"  => "F",
            "Age" => 35
        ],
        [
            "Prenom" => "Eric",
            "Sexe"  => "M",
            "Age" => 15
        ],
        [
            "Prenom" => "Elisabeth",
            "Sexe"  => "F",
            "Age" => 17
        ],
        [
            "Prenom" => "Karim",
            "Sexe"  => "M",
            "Age" => 45
        ]
    ];
    foreach($users as $user){
        affichage($user);
    }
    */

    //-------exos 11
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
    function affichage(array $tab) : void {
        $prenom='';
        $sexe=true;

        foreach($tab as $key => $value){
            if($key == "Prenom"){
                $prenom = $value;
                echo "Bonjour ";
            }elseif ($key == "Sexe"){
                $sexe = estFemme($value); 
            }elseif($key == "Age"){
                if(estAdulte($value)){
                    if(!$sexe){
                        echo "Monsieur " . $prenom .", vous êtes un adulte agé de " .$value. " ans.<br>";
                    }else{
                        echo "Madame " . $prenom .", vous êtes une adulte agée de " .$value. " ans.<br>";
                    } 
                }else{
                    if(!$sexe){
                        echo $prenom .", vous êtes un mineur agé de " .$value. " ans.<br>";
                    }else{
                        echo "Mademoiselle " . $prenom .", vous êtes une mineure agée de " .$value. " ans.<br>";
                    } 
                }
            }
        }
    }
    $users = [
        [
            "Prenom" => "Sarah",
            "Sexe"  => "F",
            "Age" => 35
        ],
        [
            "Prenom" => "Eric",
            "Sexe"  => "M",
            "Age" => 15
        ],
        [
            "Prenom" => "Elisabeth",
            "Sexe"  => "F",
            "Age" => 17
        ],
        [
            "Prenom" => "Karim",
            "Sexe"  => "M",
            "Age" => 45
        ]
    ];
    foreach($users as $user){
        affichage($user);
    }
    
    /*
    $nom="Robert";
    
    function adulte($age, $nom){
        
        if($age >=18){
            echo "Vous êtes majeur ". "ok". $age . $nom ;
        }else{
            echo "Vous êtes mineur ". $age . $nom;
        }
    }
    adulte(12,$nom);
    */
    

    
   


