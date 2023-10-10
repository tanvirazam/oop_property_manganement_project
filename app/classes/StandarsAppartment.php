<?php 
namespace app\classes;


use app\Traits\Belconi;
use app\classes\Appertment;

class StandarsAppartment extends  Appertment 

{


    use Belconi;

    public function calculateRent(){
        $this->rent=$this->area * 0.2 + $this->appertmentNumber * 100;

        if($this->getBelconi()){
            $this->rent+=50;
       }
    }

    



}