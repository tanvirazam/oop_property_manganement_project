<?php 

namespace app\Traits;

trait Belconi{
    protected $belconi;

    public function setBelconi($belconi){
        $this->belconi=$belconi;
    }

    public function getBelconi(){
        return $this->belconi;
    }
}