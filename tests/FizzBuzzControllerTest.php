<?php

declare(strict_types=1);

namespace FizzBuzz\Tests;

use FizzBuzz\FizzBuzzController;
use FizzBuzz\FizzBuzzServiceInterface;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class FizzBuzzControllerTest extends TestCase
{
    public function testPrintNumbers(): void
    {
        // Create a mock of FizzBuzzServiceInterface
        $mockFizzBuzzService = $this->createMock(FizzBuzzServiceInterface::class);
        $mockFizzBuzzService->method('generateFizzBuzz')
            ->willReturn(['1', '2', 'Fizz']);

        // Create an instance of FizzBuzzController with the mock service
        $controller = new FizzBuzzController($mockFizzBuzzService);

        // Test case for printing FizzBuzz numbers
        $this->expectOutputString("1\n2\nFizz\n");
        $controller->printNumbers(1, 3);
    }

    public function testPrintNumbersWithInvalidRange(): void
    {
        $this->expectException(InvalidArgumentException::class);

        // Create a mock of FizzBuzzServiceInterface
        $mockFizzBuzzService = $this->createMock(FizzBuzzServiceInterface::class);

        // Create an instance of FizzBuzzController with the mock service
        $controller = new FizzBuzzController($mockFizzBuzzService);

        // Test case for invalid range
        $controller->printNumbers(5, 2);
    }
}
