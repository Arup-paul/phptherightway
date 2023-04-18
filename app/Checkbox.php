<?php

namespace App;

class Checkbox extends Field
{
    public function render():string
    {
        return "<input type='checkbox'  value='{$this->name}' />";
    }
}