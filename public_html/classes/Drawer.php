<?php

namespace classes;

class Drawer
{
    // default values
    const PI = 3.14;
    private static $type = 'circle';
    private static $diameter = 100;
    private static $color = 'purple';

    public static function circle($diameter = null, $color = null)
    {
        self::$type = 'circle';
        // Default values for circle
        self::$diameter = $diameter ?? 100;
        self::$color = $color ?? 'blue';
        return __CLASS__;      // make static method chainable
    }

    public static function square($diameter = null, $color = null)
    {
        self::$type = 'square';
        // Default values for square
        self::$diameter = $diameter ?? 100;
        self::$color = $color ?? 'green';
        return __CLASS__;      // make static method chainable
    }

    public static function draw()
    {
        $width = self::$diameter;
        $color = self::$color;
        if (self::$type == 'circle') {
            $radius = self::$diameter / 2;
            echo <<<CIRCLE
                <p>
                    <svg height="$width" width="$width">
                      <circle cx="$radius" cy="$radius" r="$radius" fill="$color" />
                    </svg>
                </p>
            CIRCLE;
        } else {
            echo <<<RECT
                <p>
                    <svg height="$width" width="$width">
                      <rect x="0" y="0" width="$width" height="$width" fill="$color" />
                    </svg>
                </p>
            RECT;
        }
        return __CLASS__;      // make static method chainable
    }

    public static function printInfo()
    {
        echo "<p><b>" . self::$color . " " . self::$type . "</b> with diameter <b>" . self::$diameter .
            " px</b> and surface <b>" . self::surface() . " px²</b></p>\n";
        return __CLASS__;      // make static method chainable
    }

    public static function surface()
    {
        if (self::$type == 'circle') {
            $surface = (self::PI * self::$diameter ** 2) / 4;
        } else {
            $surface = self::$diameter ** 2;
        }
        return $surface;
    }
}