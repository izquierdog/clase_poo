<?php
    include_once('Carro.php');
    class Moto extends Carro{
        private $tipo;
        function __construct($model, $year, $marca, $tipo)
        {
            parent::__construct($model, $year, $marca);
            $this->tipo = $tipo;           
        }
        function getModelo(){
            parent::getModelo();
            echo "El modelo es {$this->modelo} y el tipo es {$this->tipo}";
        }

    }