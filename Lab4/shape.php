<?php

abstract class shape
{
    protected $name;

    public function __construct($in_name){
        $this->name=$in_name;
    }

    public function getName(){
        return ($this->name);
    }


    abstract public function CalculateSize();
}
