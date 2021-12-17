<?php

            include_once("modelos/empleado.php");
            include_once("conexion.php");

            BD::crearIntancia();

            class ControladorEmpleados{

            public function inicio(){

            $engorde=Engorde::consultar();
            include_once("vistas/paginas/empleados/inicio.php");
               } 

            public function crear(){
            if($_POST){
               print_r($_POST);
               $id=$_POST['id'];
               $fecha=$_POST['fecha'];
               $cantidad=$_POST['cantidad'];
               $crecedora=$_POST['crecedora'];
               $engordadora=$_POST['engordadora'];
               $inversion=$_POST['inversion'];
               $ganancias=$_POST['ganancias'];
               $datos=$_POST['datos'];
               Engorde::crear($id, $fecha, $cantidad, $crecedora, $engordadora, $inversion, $ganancias,$datos);
            header("location:./?controlador=empleados&accion=inicio");
            
                }

           include_once("vistas/paginas/empleados/crear.php");
            }

             public function editar(){

             if($_POST){
                $id=$_POST['id'];
                $fecha=$_POST['fecha'];
                $cantidad=$_POST['cantidad'];
                $crecedora=$_POST['crecedora'];
                $engordadora=$_POST['engordadora'];
                $inversion=$_POST['inversion'];
                $ganancias=$_POST['ganancias'];
                $datos=$_POST['datos'];
                Engorde::editar($id,$fecha,$cantidad,$crecedora,$engordadora,$inversion,$ganancias,$datos);
                header("location:./?controlador=empleados&accion=inicio");

               }

                $id=$_GET['id'];
                $engorde=(Engorde::buscar($id));
                include_once("vistas/paginas/empleados/editar.php");

             }

             public function borrar(){
             print_r($_GET);
             $id=$_GET['id'];
             Engorde::borrar($id);
             header("location:./?controlador=empleados&accion=inicio");

               }
            }


?>