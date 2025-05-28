<?php
include('../modelos/conexion.php');

$num_sal= $_POST['numero_salas'];
$capa= $_POST['capacidad'];

$query="INSERT INTO `salas`(`numero_salas`, `capacidad`) VALUES ('$num_sal','$capa')";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaSala.php");
}else{

    echo"no se guardo";
}

?>