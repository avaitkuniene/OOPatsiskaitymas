<?php

class Employee
{
    public const EMPLOYEE_TYPE = 1;
    public string $name;
    protected float $salary;
    protected int $experience;
    private int $id;

    public function __construct(string $name, float $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->id = rand();
    }

    public function setExperience($experience): void
    {
        $this->experience = $experience;
    }

    public function getExperience(): int
    {
        return $this->experience;
    }

    public function getID(): int
    {
        return $this->id;
    }

    public function calculateSalary(): float
    {
        return $this->salary;
    }

    public function __toString(): string
    {
        return 'Darbuotojas ID ' . $this->id . ': ' . $this->name . ' - ' . $this->salary . ' EUR';
    }

    public function __clone()
    {
        $this->id = 0;
    }

    public static function getTypeDescription(): string
    {
        return 'Darbuotojo tipas: ' . self::EMPLOYEE_TYPE;
    }
}