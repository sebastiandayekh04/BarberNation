
<!DOCTYPE html>
<html lang="Barberia">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Entra a la web</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://previews.123rf.com/images/alexey156/alexey1562101/alexey156210100079/162719133-patr%C3%B3n-de-concepto-de-peluquer%C3%ADa-fondo-de-barber%C3%ADa-textura-transparente-de-l%C3%ADneas-diagonales-rojas.jpg'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 22rem;">
        <h2 class="card-title text-center">Login</h2>
        <form method="post">
        <div class="mb-3">
                <label for="email" class="form-label">Correo:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            
            <div class="text-center mb-3">
                <a href="./login.php" class="text-white text-decoration-underline">Si no estás registrado, entra aquí</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>
        
    </div>
</body>
</html>


   