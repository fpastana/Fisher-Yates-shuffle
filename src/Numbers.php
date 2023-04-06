<?php

namespace fpastana;

class Numbers
{
    private array $numbers;
    private int $initialNumber;
    private int $finalNumber;
    public function __construct(int $initialNumber = 1, int $finalNumber = 10)
    {
        if ($this->checkIfValidNumber($initialNumber) === false || $this->checkIfValidNumber($finalNumber) === false) {
            throw new \Exception('Invalid character was given. Please provided only positive integers');
        }

        if ($this->checkInconsistency($initialNumber, $finalNumber) === true) {
            throw new \Exception('initialNumber must be greater than finalNumber');
        }

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
            $currentPositionValue = $this->numbers[$i];
            $this->numbers[$i] = $this->numbers[$phpRandomNumber];
            $this->numbers[$phpRandomNumber] = $currentPositionValue;
        }

        return $this->numbers;
    }

    private function generateArray(): void
    {
        for ($i = $this->initialNumber; $i <= $this->finalNumber; $i++) {
            $this->numbers[$i] = $i;
        }
    }

    private function checkIfValidNumber(int $number): bool
    {
        if ($number < 0) {
            return false;
        }

        return true;
    }

    private function checkInconsistency(int $initialNumber, int $finalNumber): bool
    {
        if ($initialNumber > $finalNumber) {
            return true;
        }
        return false;
    }
}