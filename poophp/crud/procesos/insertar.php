<?php 

require_once "../conexion.php";
require_once "../metodosCrud.php";

$nombre = $_POST['txtnombre'];
$apellido = $_POST['txtapellido'];

$obj = new Metodos();

$datos = array(
    $nombre,
    $apellido
);

 if($obj->insertarDatosNombre($datos)==1){
    header("location:../index.php");
 }else{
     echo "Fallo al agregar.";
 }

?>