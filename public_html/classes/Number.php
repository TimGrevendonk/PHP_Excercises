<?php

namespace classes;

class Number
{
    private $x;

    public function __construct($x)
    {
        $this->x = $x;
    }

    public function add($y)
    {
        $this->x += $y;
        return $this;       // make method chainable
    }

    public function multiply($y)
    {
        $this->x *= $y;
        return $this;       // make method chainable
    }

    public function printInfo()
    {
        echo "<p>\$x = $this->x</p>\n";
        return $this;       // make method chainable
    }
}