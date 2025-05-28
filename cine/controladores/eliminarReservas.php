<?php
include('../modelos/conexion.php');

$id=$_REQUEST['ide'];

$query="DELETE FROM `reservas` WHERE  id_reservas='$id'";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaReservas.php");
}else{

    echo"No se pudo eliminar";
}

?>