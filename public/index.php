<?php
require __DIR__.'/../vendor/autoload.php';

$string = 'ToM, Anna and Alex can`t go to day-party on 9 july';


echo 'Original: ' . $string;
echo  'Reversed: '.stingReverse($string);