<?php

namespace App\OOP\PHP;
class Employee
{
  private string $name;
  private int $age;
  private int $salery;

    /**
     * Employee constructor.
     * @param string $name
     * @param int $age
     * @param int $salery
     */
    public function __construct(string $name, int $age, int $salery)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salery = $salery;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return int
     */
    public function getSalery(): int
    {
        return $this->salery;
    }



}