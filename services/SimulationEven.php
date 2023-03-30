<?php

namespace services;

use models\CharacterModel;

class SimulationEven
{
   public function onlyEvenEntries($characters)
    {
        $i = 0;
        foreach ($characters->characterArray as $character) {
            if ($i % 2 != 0) {
                echo $characters->characterArray[$i];
            }
            $i++;

        }

      /*  for ($i = 0; $i < count($characters->characterArray); $i++) {
            if ($i % 2 != 0) {
                echo $characters->characterArray[$i];
            }
        }
*/    }
}