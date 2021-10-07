<?php 

    include('../models/BaseDatos.php');
    include('../models/consultasEmpleado.php');

    if(isset($_POST["boton"])){

        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $email=$_POST["email"];
        $edad=$_POST["edad"];
        $descripcion=$_POST["descripcion"];
        $fotografia=$_POST["fotografia"];

        $empleado= new Empleado($nombres,$apellidos,$email,$edad,$descripcion,$fotografia);
        $consulta=$empleado->registrarEmpelado();

        
        $baseDatos= new BaseDatos();
        $baseDatos->insertarRegistro($consulta);

       
    }else{
        echo("no deberias estar aquí");
    }

   


?>