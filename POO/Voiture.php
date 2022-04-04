<?php
    class Voiture{
        private String $couleur= "Blanche";
        private float $poids= 510.50;
        private int $prix= 3000;
        private string $marque;

        public function __construct(string $uneCouleur, float $unPoids, int $unPrix, string $uneMarque){
            $this->couleur = $uneCouleur;
            $this->poids = $unPoids;
            $this->prix = $unPrix;
            $this->marque = $uneMarque;
        }
        public function demarrer(): void{
            echo "La voiture démarre";
        }
        public function accelerer(): void{
            echo "La voiture accélère";
        }
        public function changerCouleur(String $nouvelleCouleur): void{
            $this->couleur = $nouvelleCouleur;
        }
        public function changerPrix(String $nouveauPrix): void{
            $this->prix = $nouveauPrix;
        }
        public function changerPoids(String $nouveauPoids): void{
            $this->poids = $nouveauPoids;
        }
        public function obtenirCouleur(): String{
            return $this->couleur;
        }
        public function obtenirPoids(): float{
            return $this->poids;
        }
        public function obtenirPrix(): int{
            return $this->prix;
        }
        public function getMarque():string{
            return $this->marque;
        }
        public function setMarque(string $uneMarque){
            $this->marque = $uneMarque;
        }
        public function augmenterPrix(int $prixAAjouter) : void{
            $this->prix += $prixAAjouter;
        }

        public function plusChere(Voiture $uneVoiture) : bool{
            return $this->prix >= $uneVoiture->obtenirPrix();
        }

        
        public function __toString() : string{
            return  "Couleur : " . $this->couleur."<br>".
                    "Poids : " . $this->poids." Kg<br>".
                    "Prix : " . $this->prix ." Euros<br>".
                    "Marque : " . $this->marque ."<br>";
        }
        
        

    }
    
?>