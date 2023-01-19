<?php

namespace OOP\Vigi\Classes;

class OrderProcessor
{
    private array $items = [];
    private TotalCalculatorInterface $calculator;

    public function __construct(TotalCalculatorInterface $calculator)
    {
        $this->calculator = $calculator;
    }

    public function addItem(CinemaTicket $item)
    {
        return $this->items[] = $item;
    }

    public function getList(): array
    {
        return $this->items;
    }

    public function total(): float
    {
        return $this->calculator->calculatePrice($this->items);
    }
}