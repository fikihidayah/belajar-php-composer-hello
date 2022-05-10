<?php

namespace ProgrammerZamanNow\Belajar;

class Customer
{
  private $name;
  public function __construct($name)
  {
    $this->name = $name;
  }

  public function sayHello(string $name): string
  {
    return "Hello $name, My Name is $this->name" . PHP_EOL;
  }
}
