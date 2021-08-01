<?php 

class Miclase{

    //Declaramaos atributos

    public $atributo1 ="Hola, desde el atributo";


    //Declaramos métodos

    public function miMetodo(){

        // ¿Cómo podemos mandar llamar un atributo

       return $this->atributo1;
    }

}



echo miMetodo();
?>