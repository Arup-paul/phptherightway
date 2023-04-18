<?php

namespace App;

class Text extends Field
{
    public function render():string
    {
        return "<input type='text'  value='{$this->name}' />" . PHP_EOL;
    }
}