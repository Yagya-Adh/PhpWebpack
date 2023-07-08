<?php

namespace Yagya\Justfake\Resturant;

use Yagya\Justfake\Resturant\Fake;

class Resturant
{
    use Fake;

    public $num;
    public function __construct($num)
    {
        $this->num = $num;
    }

    public function menu()
    {

        // var_dump(array_values(self::$name));

        // foreach (self::$name as $key => $fake) {
        //     echo $fake . ' ';
        // }

        self::fake();
    }


    function add($a)
    {
        ++$a;
        echo 'Add : ' . $this->num += $a;
        return $this;
    }


    function sub($b)
    {
        ++$b;
        echo 'Sub : ' . $this->num -= $b;
        return $this;
    }
}
