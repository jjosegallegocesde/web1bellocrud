<?php 


    class Empleado{


        public $nombres;
        public $apellidos;
        public $email;
        public $edad;
        public $descripcion;
        public $foto;

        public function __construct($nombres,$apellidos,$email,$edad,$descripcion,$foto){

            $this->nombres=$nombres;
            $this->apellidos=$apellidos;
            $this->email=$email;
            $this->edad=$edad;
            $this->descripcion=$descripcion;
            $this->foto=$foto;

        }

        public function registrarEmpelado(){

            $consultaSQL="INSERT INTO empleados(nombres,apellidos,email,edad,descripcion,foto) 
            VALUES ('$this->nombres','$this->apellidos','$this->email','$this->edad','$this->descripcion','$this->foto')";

            return $consultaSQL;

        }



    }





?>