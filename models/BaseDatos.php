<?php 

    class BaseDatos {

        //ATRIBUTOS=VARIABLES=DATOS
        public $usuario="root";
        public $passwordBD="";
        public $servidorBD="mysql:host=localhost;";
        public $nombreBD="dbname=tiendita";
        

        //METODO ESPECIAL CONSTRUCTOR
        public function __construct(){}

        //METODOS=ACCIONES=FUNCIONES
        public function conectarConBD(){

            //MANEJO DE ERRORES
            try{

                $datosGeneralesBD=$this->servidorBD.$this->nombreBD;
                $conexion= new PDO($datosGeneralesBD,$this->usuario,$this->passwordBD);
                return ($conexion);
                //echo("exito");

            }catch(PDOException $error){

                die("Tenemos un problema ".$error->getMessage());

            }

        }

        public function insertarRegistro($consultaSQL){

            $conexion=$this->conectarConBD();
            
            //$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            try{

                $operacion=$conexion->prepare($consultaSQL);
                $resultado=$operacion->execute();
                echo("exito...agregando");

            }catch(PDOException $error){
                 die("Tenemos un problema ".$error->getMessage());
            }
            
            
            $transaccion=$conexion->prepare($consultaSQL);
            


        }


        
    }





?>