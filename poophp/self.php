<?php

class Metodos{

    public function mandarColor($valor){

        if($valor == 1){
            return "Rojo";
        }else if($valor ==2){
            return "Negro";

        }else if($valor ==3){
            return "Azul";
        }

    }

    public function darDeAltaColor($tipoColor){
        // Provesar valores de otro método en este
        //Intanciar completo (llmar un método dentro de otro)
        /* 
        *Forma que no es correcta.
        $obj = new Metodos();

        return $obj->mandarColor($tipoColor);
        */
        return self::mandarColor($tipoColor);
    }

}

$obj = new Metodos();
echo $obj->darDeAltaColor(3);

?>