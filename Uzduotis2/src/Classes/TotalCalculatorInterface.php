<?php

namespace OOP\Vigi\Classes;

interface TotalCalculatorInterface
{
    public function calculatePrice(array $tickets): float;
}