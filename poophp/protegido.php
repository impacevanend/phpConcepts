<?php 

//Los métodos protegidos sólo pueden ser accedidos
//desde herencia de clases o sólo desde clases hijas.

class ClasePadre{

    protected function metodoProtegido(){ 

        echo "método protegido";

    }

}

class ClaseHija extends ClasePadre{

    public function metodoHija(){

        return parent::metodoProtegido();
    }

}

//echo ClasePadre::  metodoProtegido();
echo ClaseHija::  metodoHija();
?>