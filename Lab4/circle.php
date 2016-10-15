<?php
require_once("shape.php");
require_once("iResizable.php");
class Circle extends shape implements iResizable{
    protected $radius;

    public function __construct($in_name, $in_radius)
    {
        parent::__construct($in_name);
        $this->radius = $in_radius;
    }

    public function getRadius(){
        return ($this->radius);
    }

    public function CalculateSize(){
        return (pi() * ($this->radius * $this->radius));
    }

    public function Resize($in_resize){

        $this->radius = sqrt(($this->CalculateSize() * ($in_resize/100)) / pi());

        return $this->CalculateSize();
    }
}
?>
