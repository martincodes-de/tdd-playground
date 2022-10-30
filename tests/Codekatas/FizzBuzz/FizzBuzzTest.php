<?php

declare(strict_types=1);


namespace Codekatas\FizzBuzz;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function fizzbuzz_play_returnsArray()
    {
        // Arrange
        $fizzBuzz = new FizzBuzz();

        //Act
        $returnValue = $fizzBuzz->play();

        //Assert
        $this->assertIsArray($returnValue);
    }

    /** @test */
    public function fizzbuzz_play_returnsNumbersInArrayFromOneToZero()
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->play();

        $this->assertEquals([1, 2], $result);
    }

    /** @test */
    public function fizzbuzz_play_returnsNumbersInArrayWhereMultiplesOfThreeIsFizz()
    {
        $fizzBuzz = new FizzBuzz();

        $numbers = $fizzBuzz->play(1, 3);

        $this->assertEquals([1, 2, "Fizz"], $numbers);
    }

    /** @test */
    public function fizzbuzz_play_returnsNumbersInArrayWhereMultiplesOfFiveIsBuzz()
    {
        $fizzBuzz = new FizzBuzz();

        $numbers = $fizzBuzz->play(1, 5);

        $this->assertEquals([1, 2, "Fizz", 4, "Buzz"], $numbers);
    }

    /** @test */
    public function fizzbuzz_play_returnsNumbersInArrayWhereMultiplesOfThreeAndFiveIsFizzBuzz()
    {
        $fizzBuzz = new FizzBuzz();

        $numbers = $fizzBuzz->play(1, 15);

        $this->assertEquals([1, 2, "Fizz", 4, "Buzz", "Fizz", 7, 8, "Fizz", "Buzz", 11, "Fizz", 13, 14, "FizzBuzz"], $numbers);
    }
}
