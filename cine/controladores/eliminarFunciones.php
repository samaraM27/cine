<?php
include('../modelos/conexion.php');

$id=$_REQUEST['ide'];

$query="DELETE FROM  `funciones` WHERE  id_funcion='$id'";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaFunciones.php");
}else{

    echo"No se pudo eliminar";
}

?>