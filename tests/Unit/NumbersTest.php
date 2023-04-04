<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use App\Numbers;

final class NumbersTest extends TestCase
{
    public function testClass(): void
    {
        $this->assertInstanceOf(Numbers::class, new Numbers());
    }

    public function testInitialInstantiation(): void
    {
        $random = new Numbers();
        $initialArray = [
            1 => 1, 
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5,
            6 => 6,
            7 => 7,
            8 => 8,
            9 => 9,
            10 => 10
        ];

        $this->assertSame($initialArray, $random->getNumbers());

        $random = new Numbers(1, 20);
        $initialArray = [
            1 => 1, 
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5,
            6 => 6,
            7 => 7,
            8 => 8,
            9 => 9,
            10 => 10,
            11 => 11,
            12 => 12,
            13 => 13,
            14 => 14,
            15 => 15,
            16 => 16,
            17 => 17,
            18 => 18,
            19 => 19,
            20 => 20
        ];

        $this->assertSame($initialArray, $random->getNumbers());
    }

    public function testArraySize(): void
    {
        $random = new Numbers();
        $this->assertCount(10, $random->myShuffle());

        $random = new Numbers(1, 100);
        $this->assertCount(100, $random->myShuffle());

        $random = new Numbers(0, 50);
        $this->assertCount(51, $random->myShuffle());
    }

    public function testNoDuplicates(): void
    {
        $random = new Numbers(1, 10000);
        $this->assertFalse($this->arrayHasDupes($random->myShuffle()));
    }

    public function arrayHasDupes($array): bool
    {
        return count($array) !== count(array_unique($array));
    }
}

