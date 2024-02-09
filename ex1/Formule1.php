<?php

class Formule1{


private $speed=0; 

// public function setSpeed($speed){
//     $this->speed=$speed;
// }
public function drive(){
    echo  "Vroom vroom à $this->speed km/h";
}
public function shiftGear($addSpeed){
 $this->speed+=$addSpeed;
}


}

$myFormule1=new Formule1();
echo $myFormule1->drive();
echo "<br>";
 $myFormule1->shiftGear(20);
echo "<br>";
echo $myFormule1->drive();
echo "<br>";
?>