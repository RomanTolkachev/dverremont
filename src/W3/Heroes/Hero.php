<?php

namespace App\W3\Heroes;

class Hero
{
    public string $name;
    public int $strength;
    public int $agility;
    public int $intelligence;
    public int $moveSpeed = 0;

    public function __construct(int $strength, int $agility, int $intelligence, int $moveSpeed, string $name)
    {
        if ($strength < 0) {
            throw new \Exception('The strenght property should be more 0');
        }
        if ($agility < 0) {
            throw new \Exception('The agility property should be more 0');
        }
        if ($intelligence < 0) {
            throw new \Exception('The intelligence property should be more 0');
        }
        if ($moveSpeed < 0) {
            throw new \Exception('The moveSpeed property should be more 0');
        }


        $this->strength = $strength;
        $this->agility = $agility;
        $this->intelligence = $intelligence;
        $this->moveSpeed = $moveSpeed;
        $this->name = $name;
    }



    public function stop(): void
    {
    }

    public function attack(string $targetId): void
    {
        // TODO:
    }

    public function die(): void
    {
        // TODO:
    }
}