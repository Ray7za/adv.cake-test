<?php
require __DIR__.'/../vendor/autoload.php';

$string = 'ToM, Anna and Alex can`t go to day-party on 9 july';
$reversed = stingReverse($string);


echo 'Original: ' . $string.' <br>';
echo  'Reversed: '.$reversed;