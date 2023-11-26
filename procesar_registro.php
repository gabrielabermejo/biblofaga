<?php
// Credenciales de la base de datos
$servername = "localhost";
$username = "nombre_usuario";
$password = "contraseña";
$dbname = "nombre_basedatos";

// Establecer conexión con la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Definir usuario y contraseña por defecto
    $usuario_por_defecto = "hola";
    $contrasena_por_defecto = "hola"; // Aquí se define la contraseña en texto plano

    $usuario = mysqli_real_escape_string($conn, $_POST["usuario"]);
    $contrasena = mysqli_real_escape_string($conn, $_POST["contrasena"]);

    if ($usuario === $usuario_por_defecto && $contrasena === $contrasena_por_defecto) {
        // Redirigir a una página en blanco después de iniciar sesión exitosamente
        header("Location: inicio.html");
        exit();
    } else {
        echo "Credenciales incorrectas. Por favor, intenta de nuevo.";
    }
}

$conn->close();
?>
