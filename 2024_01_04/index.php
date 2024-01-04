<?php

//require_once 'Computer.php';
//
//$computer = new Computer(
//    'Intel i5',
//    '16GB',
//    'Nvidia GTX 1050',
//    '1TB HDD'
//);
//
//$computer->start();
//
//echo '<br>';
//
//var_dump($computer);
//
//echo '<br>';

require_once 'Database.php';

$conn = new Database(
    '127.0.0.1',
    'root',
    'root',
    'sprawdzian_node_v5'
);

//var_dump($conn->getCars());

$car = $conn->getCar(1);

if ($car) {
    ?>
    <fieldset>
        <legend><?= $car->getManufacturer() . ' ' . $car->getModel() ?></legend>
        <div>
            <dt>Fuel</dt>
            <dd><?= $car->getFuel() ?></dd>
        </div>
        <div>
            <dt>Color</dt>
            <dd><?= $car->getColor() ?></dd>
        </div>
        <div>
            <dt>VIN</dt>
            <dd><?= $car->getVin() ?></dd>
        </div>
    </fieldset>
<?php
} else {
    echo 'Car not found';
}