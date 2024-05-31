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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verificar credenciales en la tabla administradores
    $sqlAdmin = "SELECT id FROM administradores WHERE username = '$username'";
    $resultAdmin = $conexion->query($sqlAdmin);

    if ($resultAdmin->num_rows == 1) {
        $row = $resultAdmin->fetch_assoc();
        // Verificar la contraseña
        if (password_verify($password, $row['password'])) {
            // Inicio de sesión exitoso para administrador
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $username;
            
            // Redireccionar al panel de administración u otra página protegida
            header("Location: index.php");
            exit();
        }
    }

    // No es un administrador, verificar en la tabla users
    $sqlUser = "SELECT id_users, password FROM users WHERE id_users = '$username'";
    $resultUser = $conexion->query($sqlUser);

    if ($resultAdmin->num_rows == 1) {
        // Inicio de sesión exitoso para administrador
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        
        // Redireccionar al panel de administración u otra página protegida
        header("Location: index.php");
        exit();
    } else {
        // No es un administrador, verificar en la tabla users
        $sqlUser = "SELECT id_users, name FROM users WHERE id_users = '$username' AND password = '$password'";
        $resultUser = $conexion->query($sqlUser);
    
        if ($resultUser->num_rows == 1) {
            // Inicio de sesión exitoso para usuario normal
            $userRow = $resultUser->fetch_assoc(); // Obtener la fila de resultados
            $_SESSION['user_logged_in'] = true;
            $_SESSION['user_id'] = $username;
            $_SESSION['name'] = $userRow['name'];
            
            // Redireccionar a la página de usuario normal u otra página protegida
            header("Location: ../Home.php");
            exit();
        } else {
            // Credenciales incorrectas, redireccionar al formulario de inicio de sesión con un mensaje de error
            header("Location: login.html?error=1");
            exit();
        }
    }
    

$conexion->close();
}
?>



















/* $conexion = new mysqli($server_name, $user_name, $contraseña, $nombre_BD);

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

?> */