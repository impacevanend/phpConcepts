<?php 

class Conectar{
    private $servidor ="localhost";
    private $usuario ="root";
    private $bd ="crudpoo";
    private $password ="";

    public function conexion(){
        $conexion = mysqli_connect($this->servidor, 
                                    $this->usuario,
                                    $this->password,
                                    $this->bd);
        return $conexion;


    }


}



//Conectar::conexion();

/*
*Verificando conexción exitosa.
$objeto = new Conectar();
if($objeto->conexion()){

    echo "Conectado con éxito.";

}else{
    echo "Fallo la conexión";
}
*/

?>