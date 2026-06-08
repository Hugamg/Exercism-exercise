<?php

class Position
{
    public $y = null;
    public $x = null;

    function __construct($y, $x)
    {
        $this->y = $y;
        $this->x = $x;
    }
}