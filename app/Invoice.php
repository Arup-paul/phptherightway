<?php

namespace App;

class Invoice
{

    public  function process($amount,$description)
    {
        var_dump($amount,$description);
    }

    public function __call(string $name, array $arguments)
    {
        if(method_exists($this, $name))
        {
           call_user_func_array([$this, $name], $arguments);
        }
    }

    public static function __callStatic(string $name, array $arguments)
    {
        var_dump($name, $arguments);

    }


//    protected  array $data = [];
//
//    public function __get(string $name)
//    {
//         if(array_key_exists($name, $this->data))
//         {
//             return $this->data[$name];
//         }
//        return null;
//    }
//
//    public function __set(string $name, $value): void
//    {
//        $this->data[$name] = $value;
//    }
//
//    public function __isset(string $name): bool
//    {
//        var_dump("isset");
//        return array_key_exists($name, $this->data);
//    }
//
//    public function __unset(string $name): void
//    {
//        var_dump("unset");
//        unset($this->data[$name]);
//    }
}