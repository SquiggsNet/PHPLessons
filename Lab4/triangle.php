<?php
require_once("shape.php");
require_once("iResizable.php");
class Triangle extends shape implements iResizable {
    protected $base;
    protected $height;

    public function __construct($in_name, $in_base, $in_height)
    {
        parent::__construct($in_name);
        $this->base = $in_base;
        $this->height = $in_height;
    }

    public function getBase(){
        return ($this->base);
    }

    public function getHeight(){
        return ($this->height);
    }

    public function CalculateSize(){
        return (($this->height*$this->base)/2);
    }

    public function Resize($in_resize){

        $this->height = (2*($this->CalculateSize()*($in_resize/100)))/$this->base ;

        return $this->CalculateSize();
    }
}
?>