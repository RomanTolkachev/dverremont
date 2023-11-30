<?php

namespace W3\Heroes\Horde;

use W3\Heroes\Hero;

class TourenChieftain extends Hero
{
    public function __construct(int $strength, int $agility, int $intelligence, int $moveSpeed, array $names)
    {
        parent::__construct($strength, $agility, $intelligence, $moveSpeed, $names);
    }
    public array $names = ['Marn Thunderhorn', 'Tygore Dusthoof', 'Tam Windtotem'];

}