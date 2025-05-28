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
    <h3>Lista Peliculas</h3>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Iniciar modal de demostración
</button>

<div class="row">
    <table class="table">
        <thead>
        <tr>
        <th>id</th>
        <th>Titulo</th>
        <th>Duracion</th>
        <th>Genero</th>
        <th>opciones</th>
    </tr>
        </thead>
    <tbody>
        <?php
            include('../modelos/conexion.php');
            $query="SELECT `id_pelicula`, `titulo`, `duracion`, `id_genero` FROM `peliculas`";
            $res=$conexion->query($query);
          while($row=$res->fetch_assoc())
          {
            ?>
            <tr>
            <td><?php echo $row['id_pelicula']; ?></td>
            <td><?php echo $row['titulo']; ?></td>
            <td><?php echo $row['duracion']; ?></td>
            <td><?php echo $row['id_genero']; ?></td>
           <td class="text-center"> 
                <a class="btn btn-danger" href="../controladores/eliminarPelicula.php?ide=<?php echo $row['id_pelicula'];?>" 
                class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
                    <span class="fas fa-trash"> Eliminar</span>
                </a>
            </td>
            
            <td class="text-center">
                <a class="btn btn-success" href="../vistas/editarFrmPelicula.php?ide=<?php echo $row['id_pelicula'];?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Actualizar">
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
<!--NUEVO Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Titulo Modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
                $query="SELECT `id_genero`, `Nombre` FROM `categoriagenero`";
                //asegurar la conexion ennviando la consulta
                $res=$conexion->query($query);
                //recorer todas la columnas
                if($res->num_rows>0){
                        $combobit="";
                        //comparamos mientras existan los datos
                        while($row=$res->fetch_array(MYSQLI_ASSOC))
                        {
                            //almacer en una varia los campos
                            $combobit="<option value='".$row['id_genero']."'>".$row['Nombre']."</option>";
                            echo $combobit;

                        }

                }else
                {
                        echo "No hay ningun datos para mostrar";
                }
            ?>
         </select>
    </div>

    <br>
    <button class="btn btn-primary" name="add_pelicula">Guardar</button>
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