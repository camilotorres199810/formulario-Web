<?php 
class BaseDatos{


private $servidor="localhost";
private $usuario="root";
private $clave="";
private $nombreBaseDatos="bd_acdivoca";
private $conexion; 

//constructor vacio
public function __construct(){}





public function conectarConBaseDatos(){

   
    $this->conexion= mysqli_connect(
        $this->servidor,
        $this->usuario,
        $this->clave,
        $this->nombreBaseDatos
    );

  
    if(!($this->conexion)){
        die("Error de conexión:");
    }else{
        echo("Conexión exitosa");
    }
}



public function alterarBaseDatos($consultaSQL){

    $this->conectarConBaseDatos();
    $resultado=$this->conexion->query($consultaSQL);
    return($resultado);
    $this->conexion->close();
}


public function consultarEnBaseDatos($consultaSQL){

    $this->conectarConBaseDatos();
    $resultado=$this->conexion->query($consultaSQL);
    
    $arregloFilas=array();
    foreach($resultado as $registros){
        $arregloFilas[]=$registros;
    }
    
    return($arregloFilas);
    $this->conexion->close();

}


}



?>