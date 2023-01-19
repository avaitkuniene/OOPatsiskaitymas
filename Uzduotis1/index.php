<?php

include_once 'Employee.php';
include_once 'Intern.php';
include_once 'Manager.php';

$intern = new Intern('Petras Petrauskas', 900);
$intern->setExperience(1);
echo $intern->getExperience() . PHP_EOL;
echo $intern . PHP_EOL;
echo $intern->calculateSalary() . PHP_EOL;
echo Intern::EMPLOYEE_TYPE . PHP_EOL;


$manager = new Manager('Jonas Jonauskas', 1100, 20);
$manager->setExperience(7);
echo $manager->getExperience() . PHP_EOL;
echo $manager . PHP_EOL;
echo $manager->calculateSalary() . PHP_EOL;
echo Manager::EMPLOYEE_TYPE . PHP_EOL;

$intern2 = clone $intern;
echo $intern2 . PHP_EOL;