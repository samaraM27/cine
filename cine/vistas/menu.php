<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <?php
     ///require_once "referencias.php";
     include "referencias.php";
   ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="Inicio.html">CINE BONNY</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Listas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="listaPelicula.php">Lista Peliculas</a></li>
                  <li><a class="dropdown-item" href="listaSala.php">Lista Salas</a></li>
                  <li><a class="dropdown-item" href="listaFunciones.php">Lista Funciones</a></li>
                  <li><a class="dropdown-item" href="listaReservas.php">Lista Reservas</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="crearPelicula.php" tabindex="-1" aria-disabled="true">Crear Pelicula</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="crearSala.php" tabindex="-1" aria-disabled="true">Crear Sala</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="crearFunciones.php" tabindex="-1" aria-disabled="true">Crear Funciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="crearReservas.php" tabindex="-1" aria-disabled="true">Crear Reservas</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      
</body>
</html>