<?php

namespace App;

class ToasterPro extends Toaster
{

    public function __construct()
    {
        parent::__construct();

        $this->size = 4;

    }

    public function addSlice(string $slice): void
    {
        parent::addSlice($slice);
    }

    public function toastBagel(){
         foreach ($this->slice as $i => $slice){
             echo ($i+1) . ": Toasting " . $slice . ' with bagels option' .  PHP_EOL;
         }
     }

}