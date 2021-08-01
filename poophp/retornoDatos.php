<?php 


class RetornoDatos{

    //Tipo string
    //Tipo entero
    //Tipo arreglo
    //Tipo json


    public function retornaString($edad){

        if($edad >= 18){
            return "Es mayor de edad";
        }else{
            
            return "No es mayor de edad";
        }
    }

    public function retornaEtero($valor){

        if($valor > 0){
            return 1;

        }else{
            return 0;
        }
    }

    public function retornaArreglo($ciclos){

        $datos = array();

        for ($i=0; $i < $ciclos; $i++) { 
            
            $datos[$i] = $i;
        }

        return $datos;

    }

    public function retornaJson(){
        $arr = array(
            "hdd"=>500,
            "pantalla"=>21,
            "ram"=>8
        );

        return json_encode($arr);//Nos retorne el arreglo como JSON.

    }
    
}

$miObjeto = new RetornoDatos(); 

var_dump($miObjeto->retornaString(16));
echo "<br>";
var_dump($miObjeto->retornaEtero(16));
echo "<br>";
var_dump($miObjeto->retornaArreglo(16));
echo "<br>";
var_dump($miObjeto->retornaJson());


?>