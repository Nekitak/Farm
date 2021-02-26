<?php

namespace vendor\tests;

use vendor\animals\Chicken;
use vendor\base\AnimalInterface;

final class ChickenTest
{   
    private $_chicken;
 
    public function __construct()
    {
        $this->_chicken = new Chicken();
    }

    public function isCorrectType()
    {
        return $this->$_chicken instanceof AnimalInterface;
    }

    public function isCorrectCollect()
    {  
        $collected = $this->_chicken->collect();

        if(!is_object($collected)){
            return false;
        }

        if($collected->type != "egg"){
            return false;
        }
  
        if( ( is_int($collected->value) or is_numeric($collected->value) ) == false ){
            return false;
        }

        return true; 
    }


}