<?php

namespace vendor;
 
use vendor\base\AnimalInterface;
use vendor\base\FarmInterface;

use vendor\base\AnimalTrack;

final class Farm implements FarmInterface
{ 
    
    /**
     * storage all registered animals
     */
    private $_animals = [];

    /**
     * storage harvested crop
     */
    private $_crop = [];
    
    /**
     * for register new animals
     * used trait, becasue track system can be more complexed, than storage static integer
     */
    use AnimalTrack;

    public function init() 
    {
        //
    }

    public function add(AnimalInterface $animal)
    {
        $this->_animals[++$this->id] = $animal; 
    }

    public function harvest()
    {  
        foreach ($this->_animals as $animal) 
        { 
            $product = $animal->collect();
             
            /**
             * here can be used another validate class, for more clear code
             */
            if(is_object($product))
            {
                $this->_crop[$product->type] ? (  
                    $this->_crop[$product->type] += $product->value 
                ) : (
                     $this->_crop[$product->type] = $product->value 
                );
            }
          
        }
    }

    public function getInfo()
    {
        foreach ($this->_crop as $type => $value) {
            echo $type . " : " . $value . "<br />";
        }
    }

    
}