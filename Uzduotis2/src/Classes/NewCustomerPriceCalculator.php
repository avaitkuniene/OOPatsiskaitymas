<?php

namespace OOP\Vigi\Classes;

class NewCustomerPriceCalculator implements TotalCalculatorInterface
{
    public function calculatePrice(array $tickets): float
    {
        $sum = 0;

        foreach($tickets as $ticket)
        {
            $sum += $ticket->getPrice();
            // Niekaip nesugalvojau kaip nuimti 20% tik nuo vieno bilieto :(
        }

        return $sum;
    }
}