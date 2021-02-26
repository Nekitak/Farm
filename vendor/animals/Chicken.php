<?php


namespace vendor\animals;

use vendor\base\AnimalInterface; 

final class Chicken implements AnimalInterface
{   
    public function collect(): object
    {
        return  (object) ["type" =>"egg", "value" => rand(0,1)]; 
    } 
}