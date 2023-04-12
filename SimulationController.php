<?php

class SimulationController
{
    private $serviceEven;
    private $serviceReverse;
    private $serviceUntil;
    private $characters;
    private $jsonOutput;

    public function __construct()
    {
        $this->serviceEven = new \services\SimulationEven();
        $this->serviceReverse = new \services\SimulationReverse();
        $this->serviceUntil = new \services\SimulationUntil();
        $this->characters = new \models\CharacterModel();
        $this->jsonOutput = new JSONView();
    }

    public function route()
    {
        $loopType = $_GET["loopType"];
        $until = $_GET["until"];

        switch ($loopType) {
            case "EVEN":
                $resultArray = $this->serviceEven->onlyEvenEntries($this->characters);
                break;
            case "REVERSE":
                $resultArray = $this->serviceReverse->reverseEntries($this->characters);
                break;
            case "UNTIL":
                $resultArray = $this->serviceUntil->untilEntries($this->characters, $until);
                break;
            default:
                echo "falsche Eingabe \n EVEN, REVERSE oder UNTIL + until= A oder B oder C oder ... eingeben \n";
        }
        $this->jsonOutput->output(array("loopName" => $loopType, "result" => $resultArray));
    }
}