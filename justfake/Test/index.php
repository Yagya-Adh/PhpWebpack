<?php
require_once __DIR__ . '../../vendor/autoload.php';

use Yagya\Justfake\Resturant\Resturant;


$resturant = new Resturant(2);
$resturant->add(12)->sub(10);
echo '</br>';
echo $resturant->menu();
