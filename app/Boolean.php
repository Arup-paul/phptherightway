<?php

namespace App;

class Boolean extends Field
{
    public function render():string
    {
        return "<input type='checkbox'  value='{$this->name}' /> ";
    }
}
{

}