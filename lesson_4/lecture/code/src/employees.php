<?php

namespace src;

class Employees
{
    protected string $name;
    protected int $age;
    protected int $salary;

    public function __construct(string $name, int $age, int $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }

    public function getOlderEmploy(Employees $emp)
    {
        return $this->age > $emp->age ? $this->age : $emp->age;
    }
}

$emp1 = new Employees("Oleg", 45, 1000);
$emp2 = new Employees("Anna", 50, 2000);

echo $emp1->getOlderEmploy($emp2);