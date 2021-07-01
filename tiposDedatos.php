<?php
    #* Arreglo o diccionario en PHP
    $arreglo = [
        "Nombre" => "Pedro",
        "Apellido" => "Perez"
    ];
    
    echo "Buenos días". $arreglo["Nombre"] . " " . $arreglo["Apellido"];
    
    
    #* Arreglo sin clave

    $nombre = ["Jacinto","Jose","Pepita","Mendieta"];
    echo "Buenos días". $nombre[0] . " " . $nombre[1] . " " . $nombre[2]." ". $nombre[3]. "</br>";
    var_dump($nombre);
?>