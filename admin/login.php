<?php
session_start();


$server_name = "localhost";
$nombre_BD = "trendy _commce"; 
$user_name = "root";
$contraseña = "12345";

$conexion = new mysqli($server_name, $user_name, $contraseña, $nombre_BD);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT id FROM administradores WHERE username = '$username' AND password = '$password'";
$result = $conexion->query($sql);

if ($result->num_rows == 1) {
    // Inicio de sesión exitoso, almacenar información en la sesión
    $_SESSION['admin_logged_in'] = true;
    $_SESSION['admin_username'] = $username;

    // Redireccionar al panel de administración u otra página protegida
    header("Location: index.php");
    exit();
} else {
    // Credenciales incorrectas, redireccionar al formulario de inicio de sesión con un mensaje de error
    header("Location: login.html?error=1");
    exit();
}

$conexion->close();

?>