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

<form method="POST" action="../controladores/crearFunciones.php" >
    

     <div class="form-group">
        <label for="">Selecciones la Funcion</label>
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
        <label for="">Selecciones el numero de salas</label>
        <select class="form-select" name="id_sala" id="">

            <?php
            //llamar  a la conexion de base de datos
                include('../modelos/conexion.php');

                //consulta de query mostrar datos
                $query="SELECT `id_sala`, `numero_salas` FROM `salas`";
                //asegurar la conexion ennviando la consulta
                $res=$conexion->query($query);
                //recorer todas la columnas
                if($res->num_rows>0){
                        $combobit="";
                        //comparamos mientras existan los datos
                        while($row=$res->fetch_array(MYSQLI_ASSOC))
                        {
                            //almacer en una varia los campos
                            $combobit="<option value=".$row['id_sala'].">".$row['numero_salas']."</option>";
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
        <input type="datetime-local" class="form-control" name="horario" required>
    </div>
    
    <br>
    <button class="btn btn-primary" name="add_funciones">Guardar</button>
</form>

</div>

</DIV>
    
</body>
</html>