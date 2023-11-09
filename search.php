<?php
$server_name = "localhost";
$nombre_BD = "trendy _commce";
$user_name = "root";
$contraseña = "12345";

$conexion = mysqli_connect($server_name, $user_name, $contraseña, $nombre_BD);


if (isset($_GET['term'])) {
    $searchTerm = $_GET['term'];

    // Realiza una consulta en la base de datos
    $sql = "SELECT * FROM products WHERE product_name LIKE '%$searchTerm%'";
    $result = $conexion->query($sql);

    $results = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
    }

    header('Content-Type: application/json');
    echo json_encode($results);
}

$conexion->close();
?>