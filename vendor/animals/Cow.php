<?php

namespace vendor\animals;

use vendor\base\AnimalInterface; 

final class Cow implements AnimalInterface
{ 
    public function collect(): object
    {
        return (object) ["type" => "milk", "value" => rand(8,12)]; 
    } 
}