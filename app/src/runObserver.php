<?php
declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Observable;
use App\Observer1;
use App\Observer2;

$s1 = new Observable();

$o1 = new Observer1($s1);

$o2 = new Observer2($s1);

$o1->display();
$o2->display();

$s1->setData(10, 100);

$s1->setData(20, 200);