<?php

namespace vendor\tests;

use vendor\animals\Cow;
use vendor\base\AnimalInterface;

final class CowTest
{   
    private $_cow;
 
    public function __construct()
    {
        $this->_cow = new Cow();
    }

    public function isCorrectType()
    {
        return $this->$_cow instanceof AnimalInterface;
    }

    public function isCorrectCollect()
    {  
        $collected = $this->_cow->collect();

        if(!is_object($collected)){
            return false;
        }

        if($collected->type != "milk"){
            return false;
        }
  
        if( ( is_int($collected->value) or is_numeric($collected->value) ) == false ){
            return false;
        }

        return true; 
    }


}