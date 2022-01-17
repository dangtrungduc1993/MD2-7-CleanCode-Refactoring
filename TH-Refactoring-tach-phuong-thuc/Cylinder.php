<?php

class Cylinder
{
    public $radius;
    public $height;

    public function __construct($radius, $height)
    {
        $this->radius = $radius;
        $this->height = $height;
    }

    public function getPerimeter()
    {
        return pi() * $this->radius**2;
    }

    public function getBaseArea()
    {
        return 2 * pi() * $this->radius;
    }

    public function getVolume()
    {
        $baseArea = $this->getPerimeter();
        $perimeter = $this->getBaseArea();
        return $perimeter * $this->height + 2 * $baseArea;
    }


}