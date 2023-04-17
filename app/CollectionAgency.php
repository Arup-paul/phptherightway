<?php

namespace App;

class CollectionAgency implements DebCollector
{

    public function collect(float $amount): float
    {
        $guaranteed =  $amount * 0.1;
        return mt_rand($guaranteed, $amount);
    }
}
{

}