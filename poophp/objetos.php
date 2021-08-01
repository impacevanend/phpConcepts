<?php 

class Miclase{

    //mis atrubutos

    public $resultado = 0;

    //Mis métodos

    public function miMetodo($v1, $v2){

        $this->resultado = $v1 + $v2;

        return $this->resultado;
    }


}

//Termina mi clase

//Instanciar un objeto

$miObjeto = new Miclase();

echo $miObjeto->miMetodo(5, 5);


?>