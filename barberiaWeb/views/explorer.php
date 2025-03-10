<?php 
require_once '../config/db_config.php' ; 

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
</head>
<body>
<?php 
require_once '../views/header.php' ; 
?>  

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
                <div class="card border-0 shadow-sm">
                    <img src="https://i.pinimg.com/736x/43/57/07/435707ccf07d44e5a308aab52bf1826f.jpg" class="card-img-top" alt="corte prueba">
                    <div class="card-body text-center">
                        <h6 class="card-title">Burst fade</h6>
                        <p class="card-text text-muted">Degradado, Mohicano</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card border-0 shadow-sm">
                    <img src="https://i.pinimg.com/736x/7f/f4/16/7ff416263a6844f75acddd0b1aff86bb.jpg" class="card-img-top" alt="corte prueba">
                    <div class="card-body text-center">
                        <h6 class="card-title">Mohicano con diseño</h6>
                        <p class="card-text text-muted">Degradado, Diseño, Mohicano</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card border-0 shadow-sm">
                    <img src="https://i.pinimg.com/736x/ef/04/77/ef0477103c9f248468c07a3819d7d02f.jpg" class="card-img-top" alt="corte prueba">
                    <div class="card-body text-center">
                        <h6 class="card-title">Corte 3</h6>
                        <p class="card-text text-muted">Descripción breve</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card border-0 shadow-sm">
                    <img src="https://i.pinimg.com/736x/72/ff/2b/72ff2b444f3bc2381b44c15ed271e618.jpg" class="card-img-top" alt="corte prueba">
                    <div class="card-body text-center">
                        <h6 class="card-title">Corte 4</h6>
                        <p class="card-text text-muted">Descripción breve</p>
                    </div>
                </div>
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