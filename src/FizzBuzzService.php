<?php

declare(strict_types=1);

namespace FizzBuzz;

use InvalidArgumentException;

class FizzBuzzService implements FizzBuzzServiceInterface
{
    public function generateFizzBuzz(int $start, int $end): array
    {
        if ($start > $end) {
            throw new InvalidArgumentException("Start value must be less than or equal to end value.");
        }

        $result = [];
        for ($i = $start; $i <= $end; $i++) {
            $output = '';
            if ($i % 3 === 0) {
                $output .= 'Fizz';
            }
            if ($i % 5 === 0) {
                $output .= 'Buzz';
            }
            if ($output === '') {
                $output = (string) $i;
            }
            $result[] = $output;
        }

        return $result;
    }
}
