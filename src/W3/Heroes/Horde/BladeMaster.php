<?php

namespace W3\Heroes\Horde;

use W3\Heroes\Hero;

class BladeMaster extends Hero
{
    public function __construct()
    {
        parent::__construct(15, 23, 16, 270, array_rand(['Todzara', 'Samuro', 'Dzubei']));
    }
}