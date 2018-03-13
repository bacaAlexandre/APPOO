<?php


class Vehicule
{
    public $masse;
    public $vitesseInstantanee;

    public function __construct()
    {
        $masse =  $this->masse;
        $vitesse = $this->vitesseInstantanee;
    }

    public function calculerEnergieCinetique($masse, $vitesse)
    {

        if($masse >= 0 && $vitesse >= 0){
            return 0.5*$masse*$vitesse**2;
        }else{
            return false;
        }

    }
}