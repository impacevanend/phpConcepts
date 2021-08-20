<?php
session_start();
exract($_POST);
require "../modelo/conexionBaseDatos.php";

$login =$_POST['login'];
$pass =md5($_POST['login']);//encriptar password
$ObjConexion = Concectaser();


$sql = "SELECT * FROM usuarios where usulogin = '$login' and usuPassword ='$pass'";


$resultado = $ObjConexion->query($sql);

$existe = $resultado->num_rows;//si es verdad arroja un 1 si no un 0

if($existe == 1){

    $usuario = $resultado->fetch_object()  or die("Error");
    $_SESSION['user'] = $usuario->usuLogin;
    header("location:../vista/index2.php?pag=contenido");
    
    
}else{
    
    header("location:../vista/index2.php?pag=iniciarSesion&x=2");

}




?>