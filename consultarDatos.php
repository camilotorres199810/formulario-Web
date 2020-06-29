<?php

include('baseDatos.php');

if(isset($_POST["btnBuscar"])){
    
$operacionesenbasedatos= new baseDatos();
$nombre= $_POST["nombreBuscar"];
$consulta= "SELECT nombre, correo, password FROM usuarios WHERE nombre='$nombre'";
$resultado= $operacionesenbasedatos->consultarEnBaseDatos($consulta);

 echo("<br>");
 print_r($resultado);



}
 else{

    echo("No se hizo un maldito clic en el boton. ");



}
?>