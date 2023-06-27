<?php

declare(strict_types=1);

namespace FizzBuzz;

interface FizzBuzzServiceInterface
{
    public function generateFizzBuzz(int $start, int $end): array;
}
