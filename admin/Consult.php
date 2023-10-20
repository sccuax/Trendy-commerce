<?php
// Conectar a la base de datos (asegúrate de que tus credenciales sean correctas)
$server_name = "localhost";
$nombre_BD = "trendy _commce";
$user_name = "root";
$contraseña = "12345";

$conexion = mysqli_connect($server_name, $user_name, $contraseña, $nombre_BD);

// Verificar la conexión
if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

// Obtener el ID del usuario desde la solicitud AJAX
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Consultar la base de datos para obtener los datos del usuario
    $consulta = "SELECT id_users, name, surname, email, address, phone_number FROM users WHERE id_users = $user_id";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        // Recopilar los datos del usuario
        $usuario = mysqli_fetch_assoc($resultado);

        // Devolver los datos del usuario en formato JSON
        echo json_encode($usuario);
    } else {
        // Si no se encontraron resultados
        echo json_encode(array("error" => "Usuario no encontrado"));
    }
} else {
    // Si no se proporcionó un ID de usuario válido
    echo json_encode(array("error" => "ID de usuario no válido"));
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
