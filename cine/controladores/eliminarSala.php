<?php
include('../modelos/conexion.php');

$id=$_REQUEST['ide'];

$query="DELETE FROM `salas` WHERE  id_sala='$id'";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaSala.php");
}else{

    echo"No se pudo eliminar";
}

?>