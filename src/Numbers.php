<?php

namespace App;

class Numbers
{
    private array $numbers;
    private int $initialNumber;
    private int $finalNumber;
    public function __construct(int $initialNumber = 1, int $finalNumber = 10)
    {
        $this->initialNumber = $initialNumber;
        $this->finalNumber = $finalNumber;

        $this->generateArray();
    }

    public function getNumbers(): array
    {
        return $this->numbers;
    }

    public function myShuffle(): array
    {
        for ($i = $this->finalNumber; $i >= $this->initialNumber; $i--) {
            $phpRandomNumber = random_int($this->initialNumber,$i);
            if ($i === $phpRandomNumber)
                continue;
            $currentValueOfThePosition = $this->numbers[$i];
            $this->numbers[$i] = $this->numbers[$phpRandomNumber];
            $this->numbers[$phpRandomNumber] = $currentValueOfThePosition;
        }

        return $this->numbers;
    }

    private function generateArray(): void
    {
        for ($i = $this->initialNumber; $i <= $this->finalNumber; $i++) {
            $this->numbers[$i] = $i;
        }
    }
}