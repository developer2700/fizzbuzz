<?php

require_once 'vendor/autoload.php';

use FizzBuzz\FizzBuzzController;
use FizzBuzz\FizzBuzzService;

$fizzBuzzService = new FizzBuzzService();
$fizzBuzzController = new FizzBuzzController($fizzBuzzService);

$start = 1;
$end = 100;

$fizzBuzzController->printNumbers($start, $end);
