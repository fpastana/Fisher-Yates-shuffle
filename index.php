<?php

require __DIR__ . '/vendor/autoload.php';

use App\Numbers;

$random = new Numbers(1, 10);

echo '<pre>';
print_r($random->myShuffle());

