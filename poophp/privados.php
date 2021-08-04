<?php

//Un método privado, sólo puede ser accedido
//en la misma clase sonde fue creado.


class Clase1{

    private function saludar(){ 

        return "Saludando";


    }

    //Este método permite mostrar el contenido de un método privado
    //Es el que debe ser llamado, para evitar errores.
    public function mandaSaludo(){ 
        return self::saludar();
    }

}

    $obj = new Clase1();

    //Lanza un error, debido a que se intenta acceder a un método privado.
    echo $obj->saludar();
    

?>