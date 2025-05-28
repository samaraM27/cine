
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
    <h3>Lista Reservas</h3>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Iniciar modal de demostración
</button>

<div class="row">
    <table class="table">
        <thead>
        <tr>
          <th>id reservas</th>
        <th>id funcion</th>
        <th>nombre clientes</th>
        <th>numero asientos</th>
        <th>opciones</th>
    </tr>
        </thead>
    <tbody>
        <?php
            include('../modelos/conexion.php');
            $query="SELECT `id_reservas`,`id_funcion`, `nombre_cliente`, `numero_asientos` FROM `reservas`";
            $res=$conexion->query($query);
          while($row=$res->fetch_assoc())
          {
            ?>
            <tr>
              <td><?php echo $row['id_reservas']; ?></td>
            <td><?php echo $row['id_funcion']; ?></td>
            <td><?php echo $row['nombre_cliente']; ?></td>
            <td><?php echo $row['numero_asientos']; ?></td>
            <td class="text-center"> 
                <a class="btn btn-danger" href="../controladores/eliminarReservas.php?ide=<?php echo $row['id_reservas'];?>" 
                class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
                    <span class="fas fa-trash"> Eliminar</span>
                </a>
            </td>
            
            <td class="text-center">
                <a class="btn btn-success" href="../vistas/editarFrmReservas.php?ide=<?php echo $row['id_reservas'];?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Actualizar">
                <span class="fas fa-trash">Actualizar</span>
                </a>
            </td>
            </tr>
        <?php
          }
        ?>

  
    </tbody>
    
    </table>
</div>
</DIV>
<!--NUEVO Modal Funciones -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Titulo Modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
   <form method="POST" action="../controladores/crearReservas.php" >
    <div class="form-group">
        <label for="">Selecciones la Reservas</label>
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
    <button class="btn btn-primary" name="add_reservas">Guardar</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!---<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

</body>
</html>