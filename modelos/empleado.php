<?php

class Engorde{

    public $id;
    public $fecha;
    public $cantidad;
    public $crecedora;
    public $engordadora;
    public $inversion;
    public $ganancias;
    public $datos;

    public function __construct($id,$fecha,$cantidad,$crecedora,$engordadora,$inversion,$ganancias,$datos) {

    $this->id=$id;
    $this->fecha=$fecha;
    $this->cantidad=$cantidad;
    $this->crecedora=$crecedora;
    $this->engordadora=$engordadora;
    $this->inversion=$inversion;
    $this->ganancias=$ganancias;
    $this->datos=$datos;

       }

    public static function consultar(){
    $listaEngorde=[];
    $conexionDB=BD::crearIntancia();
    $sql= $conexionDB->query("SELECT * FROM datos");

    foreach($sql->fetchAll() as $engorde){
        $listaEngorde[]= new Engorde($engorde['id'],$engorde['fecha'],$engorde['cantidad'],$engorde['crecedora'],$engorde['engordadora'],$engorde['inversion'],$engorde['ganancias'],$engorde['datos']); 
      }
 
    return $listaEngorde;
     }

    public static function crear($id, $fecha, $cantidad, $crecedora, $engordadora, $inversion, $ganancias,$datos){

    $conexionDB=BD::crearIntancia();

    $sql= $conexionDB->prepare("INSERT INTO datos(id,fecha,cantidad,crecedora,engordadora,inversion,ganancias,datos) values(?,?,?,?,?,?,?,?)");
    $sql->execute(array($id, $fecha, $cantidad, $crecedora, $engordadora, $inversion, $ganancias,$datos));

    }

    public  static function borrar($id){
        $conexionDB=BD::crearIntancia();
        $sql= $conexionDB->prepare("DELETE  FROM datos WHERE id=?");
        $sql->execute(array($id));
       
    }

    public  static function buscar($id){
        $conexionDB=BD::crearIntancia();
        $sql= $conexionDB->prepare("SELECT * FROM datos WHERE id=?");
        $sql->execute(array($id));
        $engorde=$sql->fetch();
        return new Engorde($engorde['id'],$engorde['fecha'],$engorde['cantidad'],$engorde['crecedora'],$engorde['engordadora'],$engorde['inversion'],$engorde['ganancias'],$engorde['datos']);
    }

     public static function editar($id,$fecha,$cantidad,$crecedora,$engordadora,$inversion,$ganancias,$datos){
        $conexionDB=BD::crearIntancia();
        $sql= $conexionDB->prepare("UPDATE datos SET  id=?,fecha=?,cantidad=?,crecedora=?,engordadora=?,inversion=?,ganancias=?,datos=? WHERE id=?");
        $sql->execute(array($id,$fecha,$cantidad,$crecedora,$engordadora,$inversion,$ganancias,$datos));
        
        


     }

    }

?>