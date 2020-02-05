<?php

class Dog extends Pet
{
    function fetch()
    {
        echo $this->getName() . " is fetching!";
    }

    // OVERRIDE AN INHERITED METHOD TO BE MORE SPECIFIC
    function talk()
    {
        echo $this->getName() . " is barking!<br>";
    }
} // end of dog class