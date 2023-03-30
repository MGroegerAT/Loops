<?php

namespace services;

class SimulationUntil
{
    private $untilArray = array();

    public function untilEntries($characters, $until)
    {
        $i = 0;
        while (strcmp($characters->characterArray[$i], $until) <= 0) {
            $this->untilArray[] = $characters->characterArray[$i];
            $i++;
        }
        return $this->untilArray;
    }
}