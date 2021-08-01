<?php
Class Conexion{

    public function conectar(){

        $link = new PDO("mysql:host=localhost;dbname=mvcrud","root","");

    }
}

?>