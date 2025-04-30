<?php
session_start();
require_once 'config.php'; 
?>

<header>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid d-flex align-items-center">
      <!-- Logo + SVG Icons -->
      <div class="d-flex align-items-center">
        <a class="navbar-brand me-3" href="../index.php">
          <img src="../assets/images/img_logo.jpg" alt="Logo" width="45" height="30"> 
        </a>
        <div class="icon-container me-2">
          <a href="../index.php">
          <svg width="30" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <i class="fa-solid fa-house"></i>
          </svg>
        </a>
        </div>
        <div class="icon-container">
          <a href="../views/explorer.php">
          <svg width="30" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <i class="fa-solid fa-compass"></i>
          </svg>
          </a> 
        </div>
      </div>

 <!-- Buscador Mejorado -->
 <div class="d-flex align-items-center search-container">
        <form class="d-flex flex-grow-1">
          <input class="form-control custom-search" type="search" placeholder="Buscar barberos, estilos..." aria-label="Buscar">
          <button class="btn custom-button" type="submit">Buscar</button>
        </form>
      </div>

      <!-- Imagen de Perfil -->
      <div class="profile-image-container">
        <a href="../views/editarPerfil.php"><img src="../assets/images/profile.jpg" alt="Perfil" class="profile-image card-img-top "></a>
      </div>
    </div>
  </nav>
</header >

<link rel="stylesheet" href="styles.css">