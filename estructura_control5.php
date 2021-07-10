<?php
// *Condicional

echo "Codigo PHP de un condicional sencillo <br>";

$a = 8;
$b = 13;

if($a < $b){
    echo "a es menor que b";
}else{
    echo "a es menor que b";
}

// *While

echo "Código PHP para generar números del 1 al 10 <br>";
$i = 1;

while($i < 10)
{
    echo "El valor de i es ".$i."<br>";
    $i++;
    
    
};

echo "Salida de while <br>";

// * Do While

$i=1;

do{
    
    echo "El valor de i es ".$i."<br>";
    $i++;
    
    
}while($i <= 5);

echo "Salida de Do while <br>";
;
// * Ciclo FOR


echo "Este es un ejemplo del uso del ciclo for en PHP <br>";

for($i=1;$i<7;$i++){
    echo "Linea ".$i."<br>";
};

echo "Salida de for <br>";


// * Switch


echo "Ejemplo del uso de comando switch en PHP <br>";

$i= 5;

switch($i){
    
    case 1:
        echo "Uno";
        break;
        case 2:
            echo "Uno";
            break;
            case 3:
                echo "Uno";
                break;
                case 4:
                    echo "Uno";
                    break;
                    default:
                    echo "Solo me programaron entre uno y cuantro <br>";
                    
                };


// * For each -> arreglo

$arreglo = ["Jacinto","Jose","Pepita","Mendieta"];
$j = 0;



foreach($arreglo as $elemento){
    
    echo "$j: $elemento <br>";
    ++$j;
    
};

echo "Salida de for each listas <br>";
// * For each -> diccinario

$arreglo =[
    "Primer_Nombre" => "Pedro",
    "Segundo_Nombre" => "Pablo",
    "Primer_Apellido" => "Perez",
    "Segundo_Apellido" => "Pereira"
];

foreach($arreglo as $llave => $elemento){
    
    echo "$llave:  $elemento <br>";
    
};

echo "Salida de for each diccinarios <br>";







?>