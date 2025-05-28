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
                $query="SELECT * FROM `reservas` WHERE id_reservas='$id'";
                //asegurar la conexion ennviando la consulta
                $res=$conexion->query($query);
                //recorer todas la columnas
               $row= $res->fetch_assoc()
            ?>

<form method="POST" action="../controladores/editarReservas.php?ide=<?php echo $row['id_reservas'];?>">
    <h2>registro de reservas</h2>
     <div class="form-group">
        <label for="">Selecciones la Funcion</label>
        <select class="form-select" name="id_funcion" id="">

            <?php
            //llamar  a la conexion de base de datos
                include('../modelos/conexion.php');

                //consulta de query mostrar datos
                $query="SELECT `id_funcion` FROM `funciones`";
                //asegurar la conexion ennviando la consulta
                $res=$conexion->query($query);
                //recorer todas la columnas
                if($res->num_rows>0){
                        $combobit="";
                        //comparamos mientras existan los datos
                        while($row=$res->fetch_array(MYSQLI_ASSOC))
                        {
                            //almacer en una varia los campos
                            $combobit="<option value=".$row['id_funcion'].">".$row['id_funcion']."</option>";
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
        <label for="">Nombre Cliente</label>
        <input type="text" class="form-control" name="nombre_cliente" required>
    </div>
    <div class="form-group">
        <label for="">Numero de asiento</label>
        <input type="text" class="form-control" name="numero_asientos" required>
    </div>
   
    <br>
    <button class="btn btn-primary" name="add_reservas">Guadar</button>
</form>


</div>

</DIV>

    
</body>
</html>