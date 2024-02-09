<?php
require_once('./MachineACafe.php');
$machine = new MachineACafe("Senseo");

if (isset($_POST['allumer'])) {
    echo  $machine->allumage(true) ;
}
if (isset($_POST['dossete'])) { 
    echo  $machine->mettreUneDosette() ;
    echo "<br>";
}
if (isset($_POST['sucre'])&& isset($_POST['quantiteSucre'])) {   
    echo  $machine->sucre($_POST['quantiteSucre']) ;
    echo "<br>";
}
if (isset($_POST['payer'])&&isset($_POST['montant'])) {  
    echo  $machine->monnayeur($_POST['montant']) ;
    echo "<br>";
}
if (isset($_POST['etindre'])) {  
    echo  $machine->allumage(false) ;
    echo "<br>";
}
?>