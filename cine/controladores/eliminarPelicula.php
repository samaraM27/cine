<?php
include('../modelos/conexion.php');

$id=$_REQUEST['ide'];

$query="DELETE FROM `peliculas` WHERE  id_pelicula='$id'";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaPelicula.php");
}else{

    echo"No se pudo eliminar";
}

?>