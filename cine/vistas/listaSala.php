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
    <h3>Lista salas</h3>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Iniciar modal de demostración
</button>

<div class="row">
    <table class="table">
        <thead>
        <tr>
        <th>id</th>
        <th>Numero_Salas</th>
        <th>Capacidad</th>
          <th>opciones</th>
    </tr>
        </thead>
    <tbody>
        <?php
            include('../modelos/conexion.php');
            $query="SELECT `id_sala`, `numero_salas`, `capacidad` FROM `salas`";
            $res=$conexion->query($query);
          while($row=$res->fetch_assoc())
          {
            ?>
            <tr>
            <td><?php echo $row['id_sala']; ?></td>
            <td><?php echo $row['numero_salas']; ?></td>
            <td><?php echo $row['capacidad']; ?></td>
            <td class="text-center"> 
                <a class="btn btn-danger" href="../controladores/eliminarSala.php?ide=<?php echo $row['id_sala'];?>" 
                class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
                    <span class="fas fa-trash"> Eliminar</span>
                </a>
            </td>
            
            <td class="text-center">
                <a class="btn btn-success" href="../vistas/editarFrmSala.php?ide=<?php echo $row['id_sala'];?>" 
                class="btn btn-xs btn-danger" data-toggle="tooltip" title="Actualizar">
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
   <form method="POST" action="../controladores/crearSala.php" >
    <div class="form-group">
        <label for="">Numero_salas</label>
        <input type="number" class="form-control" name="numero_salas" required>
    </div>
    <div class="form-group">
        <label for="">Capacidad</label>
        <input type="number" class="form-control" name="capacidad" required>
    </div>
    

    <br>
    <button class="btn btn-primary" name="add_sala">Guadar</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

</body>
</html>