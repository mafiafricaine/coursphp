<?php 
class Cuicui{
    private string $couleur="Blanche";
    private float $poids=1500.0;
    private int $prix=7800;
    private string $marque;

    public function __construct(string $uneCouleur, float $unPoids, int $unPrix,string $uneMarque){
        $this->couleur = $uneCouleur;
        $this->poids = $unPoids;
        $this->prix = $unPrix;
        $this->marque=$uneMarque;
    }

    public function changerCouleur(string $nouvelleCouleur): void{
        $this->couleur = $nouvelleCouleur;
    }
    public function changerPoids(string $nouveauPoids): void{
        $this->poids = $nouveauPoids;
    }
    public function changerPrix(string $nouveauPrix): void{
        $this->prix = $nouveauPrix;
    }
    public function setMarque(string $nouvelleMarque): void{
        $this->marque = $nouvelleMarque;
    }


    public function obtenirCouleur(): string{
        return $this->couleur;
    }
    public function obtenirPoids(): float{
        return $this->poids;
    }
    public function obtenirPrix(): int{
        return $this->prix;
    }
    public function getMarque(): string{
        return $this->marque;
    }

    public function demarrer(): void{
        echo "La voiture démarre <br>";
    }
    public function accelerer(): void{
        echo "La voiture accélère <br>";
    }

    public function augmenterPrix(int $prixAAjouter) : void{
        $this->prix += $prixAAjouter;
        //$this->prix = $this->prix + $prixAAjouter;
    }
    public function __toString() : string{
        return  "Couleur : " . $this->couleur."<br>".
                "Le est Poids de : " . $this->poids." Kg<br>".
                "Avec un Prix de : " . $this->prix ." Euros<br>".
                "Dont Marque : " . $this->marque ."<br>";
    }

   
}