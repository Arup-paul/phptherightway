<?php

namespace App;

interface DebCollector
{
    public function collect(float $amount): float;
}