<?php
    class Personne{
        //attributs
        private string $prenom;
        private int $age;
        private string $sexe;

        //le constructeur
        public function __construct(string $unPrenom, int $unAge, string $unSexe){
            $this->prenom = $unPrenom;
            $this->age = $unAge;
            $this->sexe = $unSexe;
        }
        
        //les Getters
        public function getPrenom() : string{
            return $this->prenom;
        }
        public function getAge() : int{
            return $this->age;
        }
        public function getSexe() : string{
            return $this->sexe;
        }

        //Les Setters
        public function setPrenom(string $unPrenom) : void{
            $this->prenom = $unPrenom;
        }
        public function setAge(int $unAge) : void{
            $this->age = $unAge;
        }
        public function setSexe(string $unSexe) : void{
            $this->sexe = $unSexe;
        }

        //methodes toString et estPlusAgee
        public function __toString() : string{
            return "Prénom : ".$this->prenom . "<br>" .
                   "Age : " . $this->age . " ans <br>" . 
                   "Sexe : " . $this->sexe . "<br>" ;
        }

        public function estPlusAgee(Personne $unePersonne) : bool{
            return $this->age > $unePersonne->getAge();
        }


    }
?>