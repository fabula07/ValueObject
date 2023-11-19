<?php

class ValueObject
{
    private $red;
    private $green;
    private $blue;

    public function __construct( $red,$green,$blue )
    {
        $this -> red = $red  ;
        $this -> green = $green;
        $this -> blue = $blue;
    }

    public function getRed()
    {
        return $this -> red ;
    }

    public function getGreen()
    {
        return $this -> green;
    }

    public function getBlue()
    {
        return $this -> blue;
    }

    public function setRed($red):void
    {
        $this -> red = $red;
    }

    public function setGreen($green) : void
    {
        $this -> green = $green;
    }

    public function setBlue($blue): void
    {
        $this -> blue = $blue;
    }

    private function ValueColor ( $ValueColor ):void
    {
        if ($ValueColor < 0 || $ValueColor > 255)
        {
            echo "This is not the valid color"; // throw new Exception "This is not the valid color"
        }
    }

    public function equals(ValueObject $anotherColor): bool
    {
        return ($this->red === $anotherColor->getBlue() || $this->red === $anotherColor->getGreen()) &&
            ($this->green === $anotherColor->getRed() || $this->green === $anotherColor->getBlue()) &&
            ($this->blue === $anotherColor->getRed() || $this->blue === $anotherColor->getGreen());
    }

    public static function random(): ValueObject
    {
        $red = rand();
        $green = rand();
        $blue = rand();

        return new self($red, $green, $blue);
    }

    public function mix()
    {
        $red = $this->getRed();
        $green = $this->getGreen();
        $blue = $this-> getBlue();

        $mixColors = ($red+$green+$blue)/3;

        return $mixColors;

    }

}