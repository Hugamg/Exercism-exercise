<?php

class ProgramWindow
{
    public $y = null;
    public $x = null;
    public $height = null;
    public $width = null;

    function __construct()
    {
        $this->y = 0;
        $this->x = 0;
        $this->height = 600;
        $this->width = 800;
    }

    function resize(Size $size)
    {
        $this->height = $size->height;
        $this->width = $size->width;
    }
    
    function move(Position $position)
    {
        $this->y = $position->y;
        $this->x = $position->x;
    }
}
