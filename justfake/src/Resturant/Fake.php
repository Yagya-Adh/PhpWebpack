<?php

namespace Yagya\Justfake\Resturant;


trait Fake
{

    public static $name = [
        'One' => 'Potato',
        'Two' => 'Maze',
        'Three' => 'Rice',
        'Four' => 'Cauliflowers',
    ];


    // public static $name = [
    //     'Potato',
    //     'Maze',
    //     'Rice',
    //     'Cauliflowers',
    // ];




    public static function fake()
    {
        foreach (self::$name as $fake) {
            echo  $fake;
        }
    }
}
