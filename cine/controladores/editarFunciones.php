<?php
include('../modelos/conexion.php');

$id= $_REQUEST['ide'];

$horari= $_POST['horario'];

$query="UPDATE `funciones` SET `horario`='$horari' WHERE
id_funcion='$id' ";



$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaFunciones.php");
}else{

    echo"no se guardo";
}

?>