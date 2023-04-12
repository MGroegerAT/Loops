<?php

namespace services;

class SimulationReverse
{
    private $reverseArray = array();

    public function reverseEntries($characters)
    {
        $count = count($characters->characterArray) - 1;
        // $this->reverseArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);         // funktioniert;
        // $this->reverseArray = array($count);   funktioniert nicht

        //funktioniert
        for($i = 0; $i < $count; $i++) {
            $this->reverseArray[] = " ";
        }

        foreach ($characters->characterArray as $character) {
            $this->reverseArray[$count--] = $character;
        }
        return $this->reverseArray;
    }
}
