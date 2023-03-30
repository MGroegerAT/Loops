<?php

namespace services;

class SimulationReverse
{
    private $reverseArray = array();

    public function reverseEntries($characters)
    {
        $count = count($characters->characterArray);
        for ($i = 1; $i <= $count; $i++) {
            $this->reverseArray[] = $characters->characterArray[$count - $i];
        }
        return $this->reverseArray;
    }
}