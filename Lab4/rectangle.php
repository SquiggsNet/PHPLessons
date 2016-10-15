<?php
require_once("shape.php");
require_once("iResizable.php");
class Rectangle extends shape implements iResizable{

    protected $length;
    protected $width;

    public function __construct($in_name, $in_length, $in_width)
    {
        parent::__construct($in_name);
        $this->length = $in_length;
        $this->width = $in_width;
    }

    public function getLength(){
        return ($this->length);
    }

    public function getWidth(){
        return ($this->width);
    }

    public function CalculateSize(){
        return ($this->length*$this->width);
    }

    public function Resize($in_resize){
    return;
    }
}
?>