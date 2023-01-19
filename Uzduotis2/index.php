<?php

require_once 'vendor\autoload.php';

use OOP\Vigi\Classes\CinemaTicket as Ticket;
use OOP\Vigi\Classes\OrderProcessor;
use OOP\Vigi\Classes\StandardPriceCalculator;
use OOP\Vigi\Classes\SubscriberPriceCalculator;
use OOP\Vigi\Classes\NewCustomerPriceCalculator;


$ticket1 = new Ticket('Titanic', '12E', new DateTime("2023-02-10"), 10);
$ticket2 = new Ticket('Labas', '15D', new DateTime('2023-01-30'), 14);
$ticket3 = new Ticket('Viso gero', '2A', new DateTime('2023-01-25'), 8);

$calculator = new StandardPriceCalculator();
$subscriberCalculator = new SubscriberPriceCalculator();
$newCustomerCalculator = new NewCustomerPriceCalculator();

$order = new OrderProcessor($calculator);
$order1 = new OrderProcessor($subscriberCalculator);
$order2 = new OrderProcessor($newCustomerCalculator);

$order->addItem($ticket1);
$order->addItem($ticket2);
$order->addItem($ticket3);
echo $order->total() . PHP_EOL;

$order1->addItem($ticket1);
$order1->addItem($ticket2);
$order1->addItem($ticket3);
echo $order1->total() . PHP_EOL;

$order2->addItem($ticket1);
$order2->addItem($ticket2);
$order2->addItem($ticket3);
echo $order2->total() . PHP_EOL;
