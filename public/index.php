<?php
require __DIR__ . '/../vendor/autoload.php';
use App\Wcs\Hello;
$hi = new Hello;
echo $hi->talk();