<?php 

class Metodos{


    public function mostrarDatos($sql){

        $c = new Conectar();
        $conexion = $c->conexion();

        $result = mysqli_query($conexion,$sql);

        return mysqli_fetch_all($result,MYSQLI_ASSOC);//Nos regresa todos los datos
        //del result. MYSQLI_ASSOC-> tare los tados en un arreglo asociativo.

    }

    public function insertarDatosNombre($datos){
        $c = new Conectar();
        $conexion = $c->conexion();

        $sql="INSERT INTO t_persona (nombre,apellido)
                        values ('$datos[0]','$datos[1]')";
        return $result = mysqli_query($conexion,$sql);
    }

    public function actualizarDatosNombre($datos){
        $c = new Conectar();
        $conexion = $c->conexion();

        $sql = "UPDATE t_persona SET nombre = '$datos[0]',
                                    apellido = '$datos[1]'
                                    WHERE id='$datos[2]'";
        return $result = mysqli_query($conexion,$sql);

    }

}



?>