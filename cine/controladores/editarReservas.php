<?php
include('../modelos/conexion.php');

$id= $_REQUEST['ide'];

$id_fun= $_POST['id_funcion'];
$nom_cli= $_POST['nombre_cliente'];
$num_asient= $_POST['numero_asientos'];

$query="UPDATE `reservas` SET `id_funcion`='$id_fun',`nombre_cliente`='$nom_cli',`numero_asientos`='$num_asient' WHERE  
id_reservas='$id' ";



$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaReservas.php");
}else{

    echo"no se guardo";
}

?>