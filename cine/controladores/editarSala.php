<?php
include('../modelos/conexion.php');

$id= $_REQUEST['ide'];

$num_sal= $_POST['numero_salas'];
$capa= $_POST['capacidad'];

$query="UPDATE `salas` SET `numero_salas`='$num_sal',`capacidad`='$capa' WHERE
id_sala='$id' ";



$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaSala.php");
}else{

    echo"no se guardo";
}

?>