<?php

namespace vendor\base;



interface FarmInterface
{
    public function init();

    public function add(AnimalInterface $animal);
    public function harvest();
    
    public function getInfo();
}