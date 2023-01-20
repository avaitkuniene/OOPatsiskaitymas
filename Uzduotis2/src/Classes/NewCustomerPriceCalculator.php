<?php

namespace OOP\Vigi\Classes;

class NewCustomerPriceCalculator implements TotalCalculatorInterface
{
    public function calculatePrice(array $tickets): float
    {
        $sum = 0;
        $tickets = array_values($tickets);

        foreach($tickets as $key => $ticket)
        {
            $price = $ticket->getPrice();

            if ($key === 0){
                $price *= 0.8;
            }

            $sum += $price;
        }

        return $sum;
    }
}