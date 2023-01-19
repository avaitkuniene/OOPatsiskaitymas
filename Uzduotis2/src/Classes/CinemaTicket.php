<?php

namespace OOP\Vigi\Classes;
use DateTime;

class CinemaTicket
{
    private string $movieName;
    private string $seat;
    private DateTime $sessionDate;
    private float $price;

    public function __construct(string $movieName, string $seat, DateTime $sessionDate, float $price)
    {
        $this->movieName = $movieName;
        $this->seat = $seat;
        $this->sessionDate = $sessionDate;
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}