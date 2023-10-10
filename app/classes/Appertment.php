<?php 

namespace app\classes;

abstract class Appertment{
    protected $appertmentNumber;
    protected $area;
    protected $appertmentOfBedRoom;
    protected $rent;

    public function __construct($appertmentNumber,$area,$appertmentOfBedRoom){
        $this->appertmentNumber=$appertmentNumber;
        $this->area=$area;
        $this->appertmentOfBedRoom=$appertmentOfBedRoom;
        $this->calculateRent();

    }

    abstract public function calculateRent();


    //appertment details show

    public function showAppertmentDetails(){
        echo "Number of appertment:" .$this->appertmentNumber ."/n";
        echo "area:" .$this->area ."/n";
        echo "Number of badroom:" .$this->appertmentOfBedRoom ."/n";
        echo "monthly Rent" .$this->rent ."/n";
        }

        public function getAppertmentNumber(){
            return $this->appertmentNumber;
        }
}