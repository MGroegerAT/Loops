<?php

namespace services;

use models\CharacterModel;

class SimulationEven
{
    private $evenArray = array();

    public function onlyEvenEntries($characters)
    {
        $i = 0;
        foreach ($characters->characterArray as $character) {
            if ($i % 2 != 0) {
                $this->evenArray[] = $characters->characterArray[$i];
            }
            $i++;
        }
        return $this->evenArray;

    }
}