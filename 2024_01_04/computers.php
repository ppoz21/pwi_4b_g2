<?php

require_once 'Computer.php';

echo Computer::getCount();

$c1 = new Computer(
    'Apple M1',
    '16 GB',
    'Apple M1',
    '1TB SSD'
);

echo "Ilość komputerów: " . Computer::$count . "<br>";

$c2 = new Computer(
    'Intel i7',
    '16 GB',
    'Nvidia RTX 3080',
    '1TB SSD'
);

echo "Ilość komputerów: " . Computer::$count . "<br>";

$c3 = new Computer(
    'Intel i7',
    '16 GB',
    'Nvidia RTX 3080',
    '1TB SSD'
);

echo "Ilość komputerów: " . Computer::$count . "<br>";

unset($c2);

echo "Ilość komputerów: " . Computer::$count . "<br>";


