<!-- /*
*Verificar conexión
Crear un proyeco nuevo en phpmyadmin
Se crean cuatro campos (id, task, description, created_at(currentstanptime))

*/


/*
*Conexión a mysql(importar libreria)
de manera local -> localhost
usuario -> root
pasajero -> ...
base de datos -> php_mysql_cr♪d
*/ -->

<?php

//*Iniciando sesión en nuestra aplicación

session_start(); //*para guardar datos dentro de la sesión.

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud'
);

// *Verificación de conexión
// if (isset($conn)){
//     echo "DB is connected";
// }

?>