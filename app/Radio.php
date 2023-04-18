<?php

namespace App;

class Radio extends Field
{
    public function render():string
    {
        return "<input type='radio'  value='{$this->name}' /> ";

    }
}
{

}