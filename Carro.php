<?php 
    class Carro{
        protected $modelo;
        private $year;
        private $marca;

        function __construct($modelo, $year, $marca)
        {
            $this->modelo = $modelo;
            $this->year = $year;
            $this->marca = $marca;
        }
        function __destruct()
        {
            echo "<br>El destructructor funcionando";
        }
        
        function getModelo(){
            return $this->modelo;
        }
        function getYear(){
            return $this->year;
        }
        function getMarca(){
            return $this->marca;
        }
        function setModelo($modelo){
            $this->modelo = $modelo;
        }
        function setYear($year){
            $this->year = $year;
        }
        function setMarca($marca){
            $this->marca = $marca;
        }


    }