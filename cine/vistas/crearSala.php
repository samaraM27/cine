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

<form method="POST" action="../controladores/crearSala.php" >
    <div class="form-group">
        <label for="">numero_salas</label>
        <input type="number" class="form-control" name="numero_salas" required>
    </div>
    <div class="form-group">
        <label for="">Capacidad</label>
        <input type="number" class="form-control" name="capacidad" required>
    </div>
   
    </div>

    <br>
    <button class="btn btn-primary" name="add_salas">Guadar</button>
</form>


</div>

</DIV>

    
</body>
</html>