<?php 
include 'header.php';

?>  
<!DOCTYPE html>
<html lang="es"> 




<div class="home-container">
    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Bienvenido a BarberNation</h1>
                <p>Donde el estilo y la inspiración se encuentran</p>
                <div class="hero-buttons">
                    <a href="register.php" class="btn-primary">Registrarse</a>
                    <a href="login.php" class="btn-secondary">Iniciar sesión</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="https://joseppons.com/formacion/wp-content/uploads/2022/05/estudiar-barberi%CC%81a@0.5x.jpg" alt="Barbería">
            </div>
        </div>
    </section>
</div>

<style>
    .hero {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 2rem;
    }

    .hero-content {
        display: flex;
        width: 100%;
    }

    .hero-text {
        flex: 1;
        padding-right: 2rem;
    }

    .hero-buttons {
        margin-top: 1rem;
    }

    .hero-buttons a {
        display: inline-block;
        margin-right: 1rem;
        padding: 0.75rem 1.5rem;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
    }

    .hero-image {
        flex: 1;
        text-align: right;
    }

    .hero-image img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }
</style>

<?php include 'footer.php'; ?>