<?php 

namespace app\classes;

use app\classes\Appertment;
use app\Interfaces\Hasamimities;

class Luxaryappertment extends Appertment implements Hasamimities{

    private $animetic;

    public function __construct($appertmentNumber, $area, $appertmentOfBedRoom,$animetic){
        parent::__construct($appertmentNumber,$area, $appertmentOfBedRoom);
        $this->animetic=$animetic;
    }

    public function calculateRent(){
       $this->rent= $this->area * 0.5 + $this->appertmentOfBedRoom * 100;

    }


    public function getAnimeties(){
        return implode(', ',$this->animetic);
    }




}