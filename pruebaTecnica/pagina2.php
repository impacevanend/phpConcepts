

<?php

// $n1 = $_GET["1"];
// $n2 = $_GET["2"];
// $op = $_GET["op"];
// $resultado = 0;

// if($op=="+"){

//     $resultado = $n1 + $n2;
    
// }else if($op=="-"){
    
//     $resultado = $n1 - $n2;

// }else if($op=="*"){

//     $resultado = $n1 * $n2;
// }else   $resultado = $n1/$n2;

// echo "El resultado es: ".$resultado;



$num1= $_GET["1"];
$num2= $_GET["2"];
$op= $_GET["op"];
$resultado = 0;

if($op == "+"){

    $resultado = $num1 + $num2;
    
    
}else if($op=="-"){
    
    $resultado = $num1 - $num2;

}else if($op=="*"){
    $resultado = $num1 * $num2;
}else{
    
    $resultado = $num1 / $num2;
    


} 



echo "El resultado de la operación es: ".$resultado;

?> 


