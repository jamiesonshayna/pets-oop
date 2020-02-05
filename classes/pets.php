<?php

class Pet
{
    private $_name;
    private $_color;

    // protected = parent and child class access

    // YOU CAN ONLY HAVE ONE CONSTRUCTOR

    // non-default constructor
    // IF USING CONSTRUCTOR LIKE THIS MAKE THE MOST IMPORTANT THING FIRST
    function __construct($name="unknown", $color="?") // get around overloaded methods
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    // accessors
    function getName()
    {
        return $this->_name;
    }

    function getColor()
    {
        return $this->_color;
    }

    // mutators
    function setName($name)
    {
        $this->_name = $name;
    }

    function setColor($color)
    {
        $this->_color = $color;
    }

    // class methods
    function eat()
    {
        echo ucfirst($this->_color) . " " . $this->_name . " is eating!<br>";
    }

    function talk()
    {
        echo $this->_name . " is talking!<br>";
    }
}
