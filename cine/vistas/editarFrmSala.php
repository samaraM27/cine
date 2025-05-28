<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "menu.php";
?>
<DIV class="container">
<div class="row">
<?php
        $id=$_REQUEST['ide'];
            //llamar  a la conexion de base de datos
                include('../modelos/conexion.php');

                //consulta de query mostrar datos
                $query="SELECT  * FROM `salas` WHERE id_sala='$id'";
                //asegurar la conexion ennviando la consulta
                $res=$conexion->query($query);
                //recorer todas la columnas
               $row= $res->fetch_assoc()
            ?>

<form method="POST" action="../controladores/editarSala.php?ide=<?php echo $row['id_sala'];?>">
    <div class="form-group">
        <label for="">numero_salas</label>
        <input type="number" class="form-control" name="numero_salas" value="<?php echo $row['numero_salas']; ?>">
    </div>
    <div class="form-group">
        <label for="">Capacidad</label>
        <input type="number" class="form-control" name="capacidad" value="<?php echo $row['capacidad']; ?>">
    </div>
    
    </div>

    <br>
    <button class="btn btn-primary" name="add_salas">Guadar</button>
</form>


</div>

</DIV>

    
</body>
</html>