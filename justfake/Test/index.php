<?php
require_once __DIR__ . '../../vendor/autoload.php';

use Yagya\Justfake\Resturant\Resturant;


$resturant = new Resturant();
echo $resturant->menu();
