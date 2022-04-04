<?php
    class Personnage{
        //attributs
        private string $nom;
        private int $vie;
        private int $attaque;
        
        //constructeur
        public function __construct(string $unNom, int $uneVie, int $uneAttaque){
            $this->nom = $unNom;
            $this->vie = $uneVie;
            $this->attaque = $uneAttaque;
        }

        //Getters
        public function getNom() : string {
            return $this->nom;
        }
        public function getVie() : int {
            return $this->vie;
        }
        public function getAttaque() : int {
            return $this->attaque;
        }

        //Setters
        public function setNom(string $unNom): void{
            $this->nom = $unNom;
        }
        public function setVie(int $uneVie): void{
            $this->vie = $uneVie;
        }
        public function setAttaque(int $uneAttaque): void{
            $this->attaque = $uneAttaque;
        }

        //Methode toString et autres
        public function __toString() : string {
            return "Nom : " . $this->nom . "<br>". 
                   "Vie : " . $this->vie . "<br>". 
                   "Puissance d'attaque : " . $this->attaque . " de dégats<br>" ;
        }

        public function lanceAttaque(Personnage $unPersonnage) : void{
            $unPersonnage->vie = $unPersonnage->vie - $this->attaque;
        }

        public function estVivant() : bool{
            return $this->vie > 0;
        }








    }
    

?>