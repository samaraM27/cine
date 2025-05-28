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

<form method="POST" action="../controladores/crearPelicula.php" >
    <div class="form-group">
        <label for="">Titulo</label>
        <input type="text" class="form-control" name="titulo" required>
    </div>
    <div class="form-group">
        <label for="">Duracion</label>
        <input type="text" class="form-control" name="duracion" required>
    </div>
   <div class="form-group">
        <label for="">Selecciones el genero</label>
        <select class="form-select" name="id_genero" id="">

            <?php
            //llamar  a la conexion de base de datos
                include('../modelos/conexion.php');

                //consulta de query mostrar datos
                $query="SELECT `id_genero`, `nombre` FROM `categoriagenero`";
                //asegurar la conexion ennviando la consulta
                $res=$conexion->query($query);
                //recorer todas la columnas
                if($res->num_rows>0){
                        $combobit="";
                        //comparamos mientras existan los datos
                        while($row=$res->fetch_array(MYSQLI_ASSOC))
                        {
                            //almacer en una varia los campos
                            $combobit="<option value='".$row['id_genero']."'>".$row['nombre']."</option>";
                            echo $combobit;

                        }

                }else
                {
                        echo "No hay ningun datos para mostrar";
                }
            ?>
         </select>
    </div>

    
    <button class="btn btn-primary" name="add_producto">Guardar</button>
</form>


</div>

</DIV>

    
</body>
</html>