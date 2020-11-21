<?php

$baseDir = __DIR__ . '/src';
$files = array_map(fn(string $file) => "$baseDir/$file.php", [
    'building',
    'person',
    'town',
    'treasury'
]);

array_walk($files, fn(string $file) => require_once($file));