<?php

declare(strict_types=1);


namespace Codekatas\FizzBuzz;

class FizzBuzz
{
    public function play(int $start = 1, int $end = 2): array
    {
        $numbers = range($start, $end);

        foreach ($numbers as &$number) {
            $replacedValue = $this->renameNumberIfNeeded($number);
            $number = is_numeric($replacedValue) ? (int) $replacedValue : $replacedValue;
        }

        return $numbers;
    }

    private function renameNumberIfNeeded(int $number): string
    {
        if (($number % 3) === 0 && ($number % 5) === 0) {
            return "FizzBuzz";
        }

        if (($number % 3) === 0) {
            return "Fizz";
        }

        if (($number % 5) === 0) {
            return "Buzz";
        }

        return (string) $number;
    }
}