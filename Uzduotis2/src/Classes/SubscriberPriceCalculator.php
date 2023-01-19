<?php

namespace OOP\Vigi\Classes;

class SubscriberPriceCalculator implements TotalCalculatorInterface
{
    public function calculatePrice(array $tickets): float
    {
        $sum  = 0;

        foreach($tickets as $ticket)
        {
            $sum += round(($ticket->getPrice() * 0.9), 2);
        }
        return $sum;
    }
}