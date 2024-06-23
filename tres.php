<?php
    include_once('Moto.php');
    $moto = new Moto("EN-125","2012", "SUZUKI", "PASEO");
    echo $moto->getModelo();
    echo "<br>";
    echo $moto->getYear();