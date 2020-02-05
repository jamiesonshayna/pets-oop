<?php

class Pet
{
    private $_name;
    private $_color;

    // YOU CAN ONLY HAVE ONE CONSTRUCTOR

    // non-default constructor
    // IF USING CONSTRUCTOR LIKE THIS MAKE THE MOST IMPORTANT THING FIRST
    function __construct($name="unknown", $color="?") // get around overloaded methods
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    function eat()
    {
        echo ucfirst($this->_color) . " " . $this->_name . " is eating!<br>";
    }

    function talk()
    {
        echo "Pet is talking<br>";
    }
}
