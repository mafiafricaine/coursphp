<?php 
class Cuicui{
    private string $couleur="Blanche";
    private float $poids=1500.0;
    private int $prix=7800;

    public function __construct(string $uneCouleur, float $unPoids, int $unPrix){
        $this->couleur = $uneCouleur;
        $this->poids = $unPoids;
        $this->prix = $unPrix;
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
    

    public function obtenirCouleur(): string{
        return $this->couleur;
    }
    public function obtenirPoids(): float{
        return $this->poids;
    }
    public function obtenirPrix(): int{
        return $this->prix;
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

   
}