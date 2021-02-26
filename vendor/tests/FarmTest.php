<?php


namespace vendor\tests;

use vendor\base\FarmInterface;

use vendor\Farm;
use vendor\animals\Chicken;
use vendor\animals\Cow;

final class FarmTest
{
    private $_farm;
   
    public function __construct()
    {
        $this->_farm = new Farm();
    }

    public function isCorrectType()
    {
        return $this->$_farm instanceof FarmInterface;
    }

    public function tryToRun()
    {
        for ($i=0; $i < 10; $i++) 
        { 
            $this->_farm->add(new Cow());  
        }

        for ($i=0; $i < 20 ; $i++) 
        { 
            $this->_farm->add(new Chicken());  
        }
  
        $this->_farm->harvest();

        foreach ( $this->_farm->getCrop() as $type => $value) {
            echo $type . " : " . $value . "<br />";
        } 
        
    }


}