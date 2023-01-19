<?php

namespace OOP\Vigi\Classes;

class StandardPriceCalculator implements TotalCalculatorInterface
{
    public function calculatePrice(array $tickets): float
    {
        $sum  = 0;

        foreach($tickets as $ticket)
        {
            $sum += $ticket->getPrice();
        }
        return $sum;
    }
}