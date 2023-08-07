<?php
namespace YonArifin\belajar;

class Costumer {
    public function __construct(private string $name)
    {
    }

    public function sayHello() {
        echo "hello, ". $this->name. "\n";
    }
}