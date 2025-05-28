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
                $query="SELECT * FROM `funciones` WHERE id_funcion='$id'";
                //asegurar la conexion ennviando la consulta
                $res=$conexion->query($query);
                //recorer todas la columnas
               $row= $res->fetch_assoc()
            ?>

<form method="POST" action="../controladores/editarFunciones.php?ide=<?php echo $row['id_funcion']; ?>">
     <div class="form-group">
        <label for="">Selecciones la funcion</label>
        <select class="form-select" name="id_pelicula" id="">

            <?php
            //llamar  a la conexion de base de datos
                include('../modelos/conexion.php');

                //consulta de query mostrar datos
                $query="SELECT `id_pelicula`, `titulo` FROM `peliculas`";
                //asegurar la conexion ennviando la consulta
                $res=$conexion->query($query);
                //recorer todas la columnas
                if($res->num_rows>0){
                        $combobit="";
                        //comparamos mientras existan los datos
                        while($row=$res->fetch_array(MYSQLI_ASSOC))
                        {
                            //almacer en una varia los campos
                            $combobit="<option value=".$row['id_pelicula'].">".$row['titulo']."</option>";
                            echo $combobit;

                        }

                }else
                {
                        echo "No hay ningun datos para mostrar";
                }
            ?>
         </select>
    </div>
    <div class="form-group">
        <label for="">Selecciones la Sala</label>
        <select class="form-select" name="id_sala" id="">

            <?php
            //llamar  a la conexion de base de datos
                include('../modelos/conexion.php');

                //consulta de query mostrar datos
                $query="SELECT `id_sala` FROM `salas`";
                //asegurar la conexion ennviando la consulta
                $res=$conexion->query($query);
                //recorer todas la columnas
                if($res->num_rows>0){
                        $combobit="";
                        //comparamos mientras existan los datos
                        while($row=$res->fetch_array(MYSQLI_ASSOC))
                        {
                            //almacer en una varia los campos
                            $combobit="<option value=".$row['id_sala'].">".$row['id_sala']."</option>";
                            echo $combobit;

                        }

                }else
                {
                        echo "No hay ningun datos para mostrar";
                }
            ?>
         </select>
    </div>

    <div class="form-group">
        <label for="">Horario</label>
        <input type="datetime-local" class="form-control" name="horario" value="<?php echo $row['horario']; ?>">
    </div>
   
    <br>
    <button class="btn btn-primary" name="add_funciones">Guadar</button>
</form>


</div>

</DIV>

    
</body>
</html>