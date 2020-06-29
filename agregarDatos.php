<?php

include('baseDatos.php');


if(isset($_POST["btnEnviar"])){
    

    $nombre=$_POST["nombreUsuario"];
    $email=$_POST["emailUsuario"];
    $password=$_POST["passUsuario"];
   
    
    $operacionEnBaseDeDatos= new BaseDatos();
   
   
    $consulta="INSERT INTO usuarios(nombre, correo, password) VALUES ('$nombre','$email','$password')";
    
    
    $resultado=$operacionEnBaseDeDatos->alterarBaseDatos($consulta);

 
    if($resultado){
        echo("<br>");
        echo("Se ha agregado con exito la informacion a la base de datos");
        echo("<br>");
    }else{
        die("error en la ejecucion");

    }




}else{
    echo("No se a presionado el boton.");
}





?>
