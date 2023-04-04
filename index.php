<?php

require __DIR__ . '/vendor/autoload.php';

use App\Numbers;

if (isset($_GET['initialNumber']) && isset($_GET['finalNumber'])) {
    $random = new Numbers($_GET['initialNumber'], $_GET['finalNumber']);
} else {
    $random = new Numbers();
}


echo '<pre>';
print_r($random->myShuffle());

