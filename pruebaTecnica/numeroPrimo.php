
<?php 
$minimo = 1;
$maximo = 100;

for ($i=$minimo; $i <= $maximo ; $i++) { 
    if (getNumero($i)) {
        echo $i." es un numero primo <br>" ;
    }else{
        
        echo $i." No es un numero primo <br>" ;
    }
}
    
function getNumero($numero){
    $contador = 0;

    for ($i = 1; $i <= $numero; $i++) { 

        if($numero%$i==  0){
            $contador = $contador + 1;
        }

    }

    if($contador == 2){

        return true;

    }else{
        return false;
    }
    

}

?>