<?php
$server_name = "localhost";
$nombre_BD = "trendy _commce";
$user_name = "root";
$contraseña = "12345";

$conexion = mysqli_connect($server_name, $user_name, $contraseña, $nombre_BD);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $IdUser = $_POST["IdUser"];
    $username = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $Address = $_POST["Address"];
    $phoneNumber = $_POST["phoneNumber"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (id_users, name, surname, email, address, phone_number, password) VALUES ('$IdUser', '$username', '$lastName', '$email', '$Address', '$phoneNumber', '$password')";

    if (mysqli_query($conexion, $query)) {
        echo "Registro exitoso. Puedes redirigir al usuario o mostrar un mensaje de éxito.";
    } else {
        echo "Error en la inserción: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>
