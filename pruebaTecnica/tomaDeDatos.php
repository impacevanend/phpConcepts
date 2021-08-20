<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    
    <form action="pagina2.php">
    <label>Nombre</label>
    <input type="text" name="nombre" >
    <label>tipo de documento</label>
    <select name="op" >
        <option value="c.c">documenot</option>
        <option value="ti.">t-i</option>
        <option value="CE">ce</option>
        
    </select>
    <input type="text" name="" >
    <label>Nombre</label>
    <input type="text" name="2" >
    <input type="submit">
    </form>


</body>
</html>

<?php

$num1= $_GET["nombre"];
$num2= $_GET["pasaporte"];
$op= $_GET["op"];
$resultado = 0;

if($op == "c.c"){

    $resultado = $num1 + $num2;
    
    
}else if($op=="-"){
    
    $resultado = $num1 - $num2;

}else if($op=="*"){
    $resultado = $num1 * $num2;
}else{
    
    $resultado = $num1 / $num2;
    


} 

?>