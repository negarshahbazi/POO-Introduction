<?php

class MachineACafe
{

    private $marque;
    private $cafe;
    private $enFonction;
    private $sucre;
    private $monnayeur;

    public function __construct($marque){
        $this->marque = $marque;
    }


// on puex chenger le nom de parametre in function 
    public function allumage($enFonction){
        $this->enFonction = $enFonction;
        if(  $this->enFonction===true){
            
        echo "<p class='text-white text-center myButton'>$this->marque est en fonction.</p>";
    }else{ 
        echo "<p class='text-white text-center myButton'>$this->marque ne fonction pas.</p>";
    }}

    public function faireDuCafe(){
        echo "<p class='text-white text-center myButton'>Le café est prêt !</p>";
    }

    public function mettreUneDosette(){
     
        echo "<p class='text-white text-center myButton'> Je mets une dosette.</p>";
  }
   
  public function sucre($sucre){
      $this->sucre=$sucre;
      
      echo"<p class='text-white text-center myButton'>vous avez $this->sucre sucres</p>";
    }

 
    public function monnayeur($montant){
        $prixCafe = 1.50; // You can set the price of the coffee
        if ($montant >= $prixCafe) {
            $change = $montant - $prixCafe;
            echo "<p class='text-white text-center myButton'>Paiement réussi. Vous avez payé $prixCafe €. Votre monnaie : $change €.</p>";
            return true;
        } else {
            echo "<p class='text-white text-center myButton'>Montant insuffisant. Veuillez insérer plus de pièces.</p>";
            return false;
        }
    }
}
    


// $machine = new MachineACafe("Senseo");
// $machine->allumage(true);
// echo "<br>";
// $machine->mettreUneDosette();
// echo "<br>";
// $machine->faireDuCafe();
// echo "<br>";
// $machine->sucre(3);
// echo "<br>";
// $machine->monnayeur(2.00);








