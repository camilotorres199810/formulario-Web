<?php

    include('baseDatos.php');


    if(isset($_POST["btnEliminar"])){


   $operacionbasedatos = new baseDatos();
   $nombre= $_POST["nombreEliminar"];
   $eliminar= "DELETE FROM `usuarios` WHERE nombre='$nombre'";
   $resultado=$operacionbasedatos->alterarBaseDatos($eliminar);


 
    }else{

     echo("No se hizo clic en el boton. ");


    }






?>