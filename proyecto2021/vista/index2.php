<?php 

session_start();
extract($_REQUEST);//Recibe post o get

if(!isset($_SESSION['user'])){
    header('location:../index.php');

}

if(!isset($_REQUEST['$pag'])){
    $pag = 'contenido'; 
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Médico</title>
</head>
<body>

<div id="divEncabezado"><?php include "encabezado.php"; ?></div>
<div id="divMenu"><?php include "menu.php"; ?></div>
<div id="divContenido"><?php include $pag."".php; ?></div>
<div id="divPiePagina"><?php include "piePagina.php"; ?></div>
    

</body>
</html>