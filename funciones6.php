<?php 


// *Funciones

function nombre_dia($dia){
    switch($dia){
        case 1: return "Domingo";
        case 2: return "Lunes";
        case 3: return "Martes";
        default: return "Sólo se de domingo a martes";
    };
};


echo nombre_dia(4);
?>