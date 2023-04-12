<?php

namespace services;

use models\CharacterModel;

class SimulationEven
{
    private $evenArray = array();

    public function onlyEvenEntries($characters)
    {
        $count = count($characters->characterArray);
        for($i = 0; $i <= $count; $i++) {
            if ($i % 2 != 0) {
                $this->evenArray[] = $characters->characterArray[$i];
            }
        }
        return $this->evenArray;
    }
}