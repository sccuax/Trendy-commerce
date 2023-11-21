<?php
$server_name = "localhost";
        $nombre_BD = "trendy _commce";
        $user_name = "root";
        $contraseña = "12345";

        $conexion = mysqli_connect($server_name, $user_name, $contraseña, $nombre_BD);
// ... configuración de la conexión a la base de datos ...

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Validaciones y verificaciones aquí...

    // Insertar usuario en la base de datos
    $query = "INSERT INTO users (name, email, password) VALUES ('$username', '$email', '$password')";
    // Ejecutar la consulta...
}
?>