<?php
include "./functions/classAutoLoader.php";
spl_autoload_register('classAutoLoader');

$voiture1 = new Voiture(2000);



$voiture1 -> couleur = "bleue";

$voiture1 -> vitesse = 50;



if($ec = $voiture1 ->calculerEnergieCinetique()){
    $ec = $ec . "Joules";

    Log::logWrite($ec);
}
