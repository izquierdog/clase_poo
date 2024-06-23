<?php
    include_once('Carro.php');
    
    $car = new Carro("Fiesta", 2023, "Ford");

    echo "Marca: {$car->getMarca()}";
    echo "<br>";
    echo "Modelo: {$car->getModelo()}";
    echo "<br>";
    echo "Año: {$car->getYear()}\n";

    