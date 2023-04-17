<?php

namespace App;

class Toaster
{
    protected array $slice;
    protected int $size;

    public function __construct()
    {
        $this->slice = [];
        $this->size = 2;
    }

    public function addSlice(string $slice): void
    {
         if(count($this->slice) < $this->size){
             $this->slice[] = $slice;
         }
    }

    public function toast(){
        foreach ($this->slice as $i => $slice){
            echo ($i+1) . ": Toasting " . $slice .  PHP_EOL;
        }
    }

}