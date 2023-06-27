<?php

declare(strict_types=1);

namespace FizzBuzz;

use InvalidArgumentException;

class FizzBuzzController
{
    private $fizzBuzzService;

    public function __construct(FizzBuzzServiceInterface $fizzBuzzService)
    {
        $this->fizzBuzzService = $fizzBuzzService;
    }

    public function printNumbers(int $start, int $end): void
    {
        if ($start > $end) {
            throw new InvalidArgumentException("Start value must be less than or equal to end value.");
        }

        $fizzBuzzList = $this->fizzBuzzService->generateFizzBuzz($start, $end);

        foreach ($fizzBuzzList as $value) {
            echo $value . "\n";
        }
    }
}
