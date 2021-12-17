<?php

class BD{
    private static $instancia=null;

    public static function crearIntancia(){

    if(!isset(self::$instancia)){

        $opcionesPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;

        self::$instancia= new PDO('mysql:host=localhost;dbname=engorde', 'root', '', $opcionesPDO);
    

         }

         return self::$instancia;

    }
}


?>