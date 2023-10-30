<?php
session_start();


$server_name = "localhost";
$nombre_BD = "trendy _commce"; 
$user_name = "root";
$contraseña = "12345";

$conexion = new mysqli($server_name, $user_name, $contraseña, $nombre_BD);

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT id FROM administradores WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);


?>