<?php 
class Cuicui{
    private string $couleur="Blanche";
    private float $poids=1500.0;
    private int $prix=7800;

    public function changerCouleur(string $nouvelleCouleur): void{
        $this->couleur = $nouvelleCouleur;
    }
    public function demarrer(): void{
        echo "La voiture démarre <br>";
    }
    public function accelerer(): void{
        echo "La voiture accélère <br>";
    }


   
}