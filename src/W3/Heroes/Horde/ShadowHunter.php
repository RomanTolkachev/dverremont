<?php

namespace W3\Heroes\Horde;

use W3\Heroes\Hero;

class ShadowHunter extends Hero
{
    public array $names = ['Shaka-Zan', 'Mamba-Gun', 'Zull-Kis'];

    public function __construct(int $strength, int $agility, int $intelligence, int $moveSpeed, string $name)
    {
        parent::__construct($strength, $agility, $intelligence, $moveSpeed, $name);
    }

}
