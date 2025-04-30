<?php
session_start();
require_once 'config.php';


// Definir la carpeta dinde se guardarán las fotos
$uploadDir = 'uploads/';

$error = "";
$email_error = false;

$name = "";
$surname = "";
$email = "";
$age = "";
// 0. Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Recoger datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //1.2 procesar el archivo de imagen
    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
    //obtener información del archivo
    $fileTmpPath = $_FILES['avatar']['tmp_name']; //ruta temporal en el servidor
    $fileName = $_FILES['avatar']['name']; //nombre original del archivo

    //separar el nombre del archivo y la extensión
    $fileNameCmps = explode(".", $fileName); 
    $fileExtension = strtolower(end($fileNameCmps)); //extensión del archivo

    //definir las extensiones permitidas (solo imagenes)
    $allowedfileExtensions = array('jpg', 'jpeg', 'png', 'gif');
    if (in_array($fileExtension, $allowedfileExtensions)) {
        //renombar el archivo para evitar duplicados (usamos md5 y time)
        //$newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        $newFileName = md5(strtolower($email)) . '.' . $fileExtension;
        //ruta final en la carpeta uploads
        $dest_path = $uploadDir . $newFileName;
        if (file_exists($dest_path)) {
            $error = "Error: El correo ya existe.";
            $email_error = true;
        } else {
            //mover el archivo de la carpeta temporal a la carpeta uploads
            if (!move_uploaded_file($fileTmpPath, $dest_path)) {
                $error = "Error: No se pudo mover al archivo a la carpeta de destino.";
                //die('Error: No se pudo mover al archivo a la carpeta de destino.');
            }
        }
    } else {
        $error = "Error: Solo se permiten archivos de imagen (jpg, jpeg, png, gif).";
        //die('Error: Solo se permiten archivos de imagen (jpg, jpeg, png, gif).');
    }
}
if ($error === "") {
    // 2. Cifrar la contraseña con password_hash
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);

    // 3. Preparar la consulta antes de insertar para evitar SQL injection
    $stmt = $mysqli->prepare(
        "INSERT INTO USERS (name, surname, email, avatar, password, rol, age, date_register) 
        VALUES (?, ?, ?, ?, ?, 'user', ?, NOW())"
    );

    // 4. Comprobar que la preparación de la consulta tuvo éxito
    if (!$stmt) {
        echo 'Error en la preparación de la consulta: ' . $mysqli->error;
        //exit;
    } else {
        // 5. Bindear los parámetros
        $stmt->bind_param('sssssi', $name, $surname, $email, $dest_path, $passwordHashed, $age);

        // 6. Ejecutar la consulta
        if ($stmt->execute()) {
            header('Location: login.php');
        } else {
            echo 'Error al registrar el usuario: ' . $mysqli->error;
        }
    }
    $stmt->close();
} else {
    echo '<b style="color:red">'.$error."</b>";
}


// 7. Cerrar la declaración
$mysqli->close();

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registro</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://previews.123rf.com/images/alexey156/alexey1562101/alexey156210100079/162719133-patr%C3%B3n-de-concepto-de-peluquer%C3%ADa-fondo-de-barber%C3%ADa-textura-transparente-de-l%C3%ADneas-diagonales-rojas.jpg'); background-size: cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 22rem;">
        <h2 class="card-title text-center">Regístrate</h2>
        <form method="post">
            <div class="mb-2">
                <label for="username" class="form-label">Nombre:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">Correo:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="telephone" class="form-label">Número telefónico:</label>
                <input type="number" name="telephone" id="telephone" class="form-control">
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mb-2">
                <label for="tipoUsuario" class="form-label">Eres:</label>
                <select name="tipoUsuario" id="tipoUsuario" class="form-select" required>
                    <option value="barbero">Barbero</option>
                    <option value="usuario">Usuario</option>
                </select>
            </div>
            <div class="text-center mb-3">
                <a href="./login.php" class="text-white text-decoration-underline">Si ya estás registrado, entra aquí</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrarse</button>
        </form>
    </div>
</body>
</html>
