<?php

namespace app\classes;

use app\classes\Appertment;

class Owner
{
    private $name;
    private $appertment;

    public function __construct($name, Appertment $appertment)
    {
        $this->name = $name;
        $this->appertment = $appertment;
    }

    public function ownDetails()
    {
        echo "Name:" . $this->name . "/n";
        echo "Appertment Number:" . $this->appertment->getAppertmentNumber() . "/n";
    }
}
