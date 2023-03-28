<?php

require __DIR__ . '/../vendor/autoload.php';

use TINT\FeatureClass;

$feature = new FeatureClass();
$output = $feature->sum(1, 2);
var_dump($output);