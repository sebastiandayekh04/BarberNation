<?php 
require_once '../views/header.php' ; 
require_once 'config.php' ; 
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/9d719ae6a3.js" crossorigin="anonymous"></script>

    <style>
                     a {
                    text-decoration: none; 
                    color: inherit; 
                    }

                    a:hover {
                    text-decoration: none; 
                     }

                    .card.custom-border {
                        border: 2px solid #000;
                    }
                    

                    .card-img-top img {
                    width: 100%;
                    height: 200px;
                    object-fit: cover;
                    }

                    .card {
                    display: flex;
                    flex-direction: column;
                    height: 100%;
                    }

                    .card-body {
                    flex-grow: 1; 
                    }



    </style>
</head>
<body>
<main>
    <div class="container">
    <div class="container-fluid">
        <!-- Sección del título y la fecha -->
        <div class="row justify-content-center mt-4">
            <div class="col-12 text-center">
                <p class="mb-1">
                    <?php echo strftime("%A, %d de %B de %Y", time()); ?>
                </p> <!-- Muestra la fecha en español -->
                <h2 class="fw-bold">Galería de Cortes</h2> <!-- Título centrado -->
            </div>
        </div>
        

        <div class="row justify-content-center g-3">
            
            <div class="col-6 col-md-4 col-lg-3">
            <a href="pelo_largo.php">
                <div class="card custom-border shadow-sm">
                    <img src="https://i.pinimg.com/736x/bd/64/7a/bd647a669fbb11898f459d3bf493793c.jpg" class="card-img-top" alt="corte prueba">
                    <div class="card-body text-center">
                        <h6 class="card-title">Cortes de pelo largo</h6>
                        <p class="card-text text-muted">Estilos diseñados para mantener, moldear y dar forma a cabellos largos. Incluye despuntes, capas y cortes en V o U para aportar movimiento.</p>
                    </div>
                </div>
                </a>
            </div>
            
            
            <div class="col-6 col-md-4 col-lg-3">
            <a href="tintes.php">
                <div class="card custom-border shadow-sm">
                    <img src="https://i.pinimg.com/736x/39/64/ec/3964ec244e64a03f8fa428965290086b.jpg" class="card-img-top" alt="corte prueba">
                    <div class="card-body text-center">
                        <h6 class="card-title">Pintura (tintes y coloración)</h6>
                        <p class="card-text text-muted">Aplicación de tintes para cambiar el color del cabello, desde tonos naturales hasta colores fantasía. También incluye técnicas como balayage, mechas y decoloraciones.</p>
                    </div>
                </div>
                </a>
            </div>
            
            <div class="col-6 col-md-4 col-lg-3">
            <a href="degradados.php">
                <div class="card custom-border shadow-sm">
                    <img src="https://i.pinimg.com/736x/55/74/e8/5574e8c2be9b92691d8a46d40b14b38e.jpg" class="card-img-top" alt="corte prueba">
                    <div class="card-body text-center">
                        <h6 class="card-title">Degradados (fades)</h6>
                        <p class="card-text text-muted">Cortes con transición gradual de cabello corto a largo en los laterales y la nuca. Puede ser low fade, mid fade o high fade según la altura del degradado.</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
            <a href="barbas.php">
                <div class="card custom-border shadow-sm">
                    <img src="https://i.pinimg.com/736x/d5/3f/2a/d53f2ad4270def8a9b65cac2e451e086.jpg" class="card-img-top" alt="corte prueba">
                    <div class="card-body text-center">
                        <h6 class="card-title">Barbas</h6>
                        <p class="card-text text-muted">Perfilado, recorte y arreglo de barba con técnicas de precisión para un acabado limpio. También incluye tratamientos de hidratación y mantenimiento.</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
            <a href="cabello_diseño.php">
                <div class="card custom-border shadow-sm">
                    <img src="https://i.pinimg.com/736x/3b/a4/53/3ba45348ba18e7baf21874fe31047923.jpg" class="card-img-top" alt="corte prueba">
                    <div class="card-body text-center">
                        <h6 class="card-title">Diseños personalizados (líneas, patrones y figuras en el cabello)</h6>
                        <p class="card-text text-muted">Creación de líneas, figuras y patrones en el cabello mediante recortes detallados. Se realizan con navaja o máquina para un acabado artístico.</p>
                    </div>
                </div>
                </a>
            </div>
            
            <div class="col-6 col-md-4 col-lg-3">
            <a href="cortes_femeninos .php">
                <div class="card custom-border shadow-sm">
                    <img src="https://i.pinimg.com/736x/1e/67/40/1e6740e4082aa6b4991943764672b15a.jpg" class="card-img-top" alt="corte prueba">
                    <div class="card-body text-center">
                        <h6 class="card-title">Cortes Femeninos</h6>
                        <p class="card-text text-muted">Técnicas de estilizado y corte para cabellos femeninos, incluyendo alisados, capas, cortes bob y pixie. Se busca resaltar las facciones y crear volumen o fluidez.</p>
                    </div>
                </div>
                </a>
            </div>


        </div>
    </div>
</main>





<?php require_once '../views/footer.php' ; ?>  
<script src="https://kit.fontawesome.com/9d719ae6a3.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
</body>
</html>