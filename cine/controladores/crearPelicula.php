<?php
include('../modelos/conexion.php');

$titu= $_POST['titulo'];
$dura= $_POST['duracion'];
$id_gener= $_POST['id_genero'];

$query="INSERT INTO `peliculas`(`titulo`, `duracion`, `id_genero`) VALUES ('$titu','$dura','$id_gener')";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaPelicula.php");
}else{

    echo"no se guardo". $conexion->error;
}

?>