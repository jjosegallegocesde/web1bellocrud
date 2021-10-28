<?php 

    class Empleado{

        public $nombres;
        public $apellidos;
        public $email;
        public $edad;
        public $descripcion;
        public $foto;

        public function __construct($nombresForm,$apellidosForm,$emailForm,$edadForm,$descripcionForm,$fotoForm){

            $this->nombres=$nombresForm;
            $this->apellidos=$apellidosForm;
            $this->email=$emailForm;
            $this->edad=$edadForm;
            $this->descripcion=$descripcionForm;
            $this->foto=$fotoForm;

        }

       public function registrar(){
           
            $consulta="INSERT INTO empleados(nombres,apellidos,email,edad,descripcion,foto) 
            VALUES ('$this->nombres','$this->apellidos','$this->email','$this->edad','$this->descripcion','$this->foto')";
        
            return $consulta;

       }

       public function buscar(){

            $consulta="SELECT * FROM empleados";
            return $consulta;

       }

       public function editar($id){
           $consulta="UPDATE empleados 
           SET email='$this->email',edad='$this->edad',foto='$this->foto' WHERE id='$id'";
           return $consulta;
       }

       public function eliminar($id){

            $consulta="DELETE FROM empleados WHERE id='$id'";
            return $consulta;

       }

    
        
    }



?>