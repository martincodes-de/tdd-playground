<?php

declare(strict_types=1);


namespace Codekatas\FizzBuzz;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function fizzbuzz_play_returnsArray()
    {
        $fizzBuzz = new FizzBuzz();
        $returnValue = $fizzBuzz->play();
        $this->assertIsArray($returnValue);
    }
}
