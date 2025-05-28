<?php
include('../modelos/conexion.php');

$id= $_REQUEST['ide'];

$titu= $_POST['titulo'];
$dura= $_POST['duracion'];
$gener= $_POST['id_genero'];

$query="UPDATE `peliculas` SET `titulo`='$titu',`duracion`='$dura',`id_genero`='$gener' WHERE 
id_pelicula='$id' ";



$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaPelicula.php");
}else{

    echo"no se guardo";
}

?>