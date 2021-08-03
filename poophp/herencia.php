<?php 

class ClasePadre{

    public function metodoPadre(){
        return "Hola, desde el padre.";
    }

    public function metodo1(){

        return "Este es un método padre.";
    }

}
class ClaseHijo extends ClasePadre{

    public function metodoHijo(){

        return parent::metodo1();//Llamará el método de su propia clas y no el de la clase padre.
        //PAra cambiar su comportamiento utilizar la palabra reservada parent

    }

    public function metodo1(){

        return "Este es un método hijo.";
    }


}

//La herencia es obtener todas las propiedades de una clase
//a otra.
//Mediante la palabra reservada extendes


$obj2 = new ClaseHijo();

//echo $obj->metodoPadre()."<br>";
echo $obj2->metodoPadre()."<br>";

//Instancia rapida o de doble puntuación.
echo ClaseHijo::metodoPadre();
echo ClaseHijo::metodoHijo();

?>