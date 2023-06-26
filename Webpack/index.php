<?php
require_once './vendor/autoload.php';

use Yagya\Webpack\Web;
use Yagya\Webpack\package\Resturant;


$web = new Web();
$web->hel();;

class Todo extends Resturant
{
    public static function go()
    {
        echo Resturant::game();
    }
}

echo "<h1>" . Resturant::$num . "</h1> ";
echo "<h1>" . Todo::go() . "</h1> ";
