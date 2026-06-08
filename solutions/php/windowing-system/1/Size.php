<?php

class Size
{
    public $height = null;
    public $width = null;

    function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
}