<?php

namespace services;

class SimulationReverse
{
    public function reverseEntries($characters)
    {
        $count = count($characters->characterArray);
        for ($i = 0; $i <= $count; $i++) {
            echo $characters->characterArray[$count - $i];
        }
       /*
        $i = count($characters->characterArray);
        foreach ($characters->characterArray as $character) {
            echo $character;
        } */
    }
}