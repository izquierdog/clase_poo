<?php
    include_once('Fruta.php');
 
    $apple = new Fruit();
    $banana = new Fruit();

    $apple->set_name("apple");
    $banana->set_name("banana");
    echo "ejercicio # 1";
    echo "<br>";
    echo "resultado getter: {$apple->get_name()}";
    echo "<br>";
    echo "resultado getter: {$banana->get_name()}";