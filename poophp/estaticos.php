
<?php 

class Miclase{

    public $mensaje=1;

    public static function metodoEstatico(){
        //*return 1;Así funciona

       // return this->$mensaje;//*No funciona. Un méto estatico no puede acceder a un atributo.
    
    }
}

echo Miclase:: metodoEstatico();
?>