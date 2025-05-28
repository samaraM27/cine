<?php
include('../modelos/conexion.php');

$id_fun= $_POST['id_funcion'];
$nom_cli= $_POST['nombre_cliente'];
$num_asient= $_POST['numero_asientos'];

$query="INSERT INTO `reservas`(`id_funcion`, `nombre_cliente`, `numero_asientos`) VALUES ('$id_fun','$nom_cli','$num_asient')";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaReservas.php");
}else{

    echo"no se guardo";
}

?>