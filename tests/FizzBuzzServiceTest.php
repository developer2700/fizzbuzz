<?php

declare(strict_types=1);

namespace FizzBuzz\Tests;

use FizzBuzz\FizzBuzzService;
use PHPUnit\Framework\TestCase;

class FizzBuzzServiceTest extends TestCase
{
    public function testGenerateFizzBuzz(): void
    {
        $fizzBuzzService = new FizzBuzzService();
        $fizzBuzzNumbers = $fizzBuzzService->generateFizzBuzz(1, 15);

        $expectedOutput = [
            '1',
            '2',
            'Fizz',
            '4',
            'Buzz',
            'Fizz',
            '7',
            '8',
            'Fizz',
            'Buzz',
            '11',
            'Fizz',
            '13',
            '14',
            'FizzBuzz',
        ];

        $this->assertSame($expectedOutput, $fizzBuzzNumbers);
    }
}
