<?php
namespace YonArifin\belajar;

class Costumer {
    public function __construct(private string $name = "gues")
    {
    }

    public function sayHello() {
        echo "hello, ". $this->name. "\n";
    }
}