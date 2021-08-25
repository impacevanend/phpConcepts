<?php

function Conectarse(){
	$ObjConexion = new mysqli("localhost","root","","centromedico");
	if($ObjConexion->connect_errno){
		echo "Erro de conexión a la base de datos".$ObjConexion->connect_error;
		exit();
	}
	else{
		return $ObjConexion;
	}
}