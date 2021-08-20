<?php 

require_once "../conexion.php";
require_once "../metodosCrud.php";

$nombre = $_POST['txtnombre'];
$apellido = $_POST['txtapellido'];
$id = $_POST['id'];

$obj = new Metodos();

$datos = array(
    $nombre,
    $apellido,
    $id
);

if($obj->actualizarDatosNombre($datos)==1){
    header("location:../index.php");
 }else{
     echo "Fallo al agregar.";
 }

?>