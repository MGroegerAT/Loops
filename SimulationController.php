<?php

class SimulationController
{
    private $serviceEven;
    private $serviceReverse;
    private $serviceUntil;
    private $characters;

    public function __construct()
    {
        $this->serviceEven = new \services\SimulationEven();
        $this->serviceReverse = new \services\SimulationReverse();
        $this->serviceUntil = new \services\SimulationUntil();
        $this->characters = new \models\CharacterModel();

    }

    public function route()
    {
        $loopType = $_GET["loopType"];
        $until = $_GET["until"];

        switch ($loopType) {
            case "EVEN":
                $this->serviceEven->onlyEvenEntries($this->characters);
                break;
            case "REVERSE":

               $this->serviceReverse->reverseEntries($this->characters);
                break;
            case "UNTIL":
                $this->serviceUntil->untilEntries($this->characters, $until);
                break;
            default:
                echo "falsche Eingabe";
        }

    }


}