<?php

class Manager extends Employee
{
    public const EMPLOYEE_TYPE = 2;
    protected float $overtimeHours;

    public function __construct(string $name, float $salary, float $overtimeHours)
    {
        parent::__construct($name, $salary);
        $this->overtimeHours = $overtimeHours;
    }

    public function calculateSalary(): float
    {
        return $this->salary + (($this->salary / 40) * $this->overtimeHours) * 2;
    }
}