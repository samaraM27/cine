<?php
include('../modelos/conexion.php');

$id_peli= $_POST['id_pelicula'];
$id_sal= $_POST['id_sala'];
$horari= $_POST['horario'];

$query="INSERT INTO `funciones`(`id_pelicula`, `id_sala`,`horario` ) VALUES ('$id_peli','$id_sal','$horari')";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaFunciones.php");
}else{

    echo"no se guardo";
}

?>