<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customAdmin.css">
    <link rel="stylesheet" href="../Normalice.css">
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <!-- Menu -->
    <div class="menu_admin d-flex flex-column align-items-start align-self-stretch">
        <div class="logo_admin w-fill d-flex justify-content-center align-items-center align-self-stretch">
            <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58" fill="none">
                <!-- (SVG code) -->
            </svg>
            <h5 class="admin_text">ADMIN</h5>
        </div>
        <div class="admin_menu_container container-fluid d-flex flex-column justify-content-between align-items-start">
            <div class="menu-admin d-flex flex-column align-items-start">
                <a class="link_menu_admin" href="../Index.html">Home</a>
                <a class="link_menu_admin" href="">Add product</a>
                <a class="link_menu_admin" href="">Update</a>
                <a class="link_menu_admin" href="">Delete</a>
                <a class="link_menu_admin" href="allUsers.php">Users</a>
                <a class="link_menu_admin" href="">See all products</a>
                <a class="link_menu_admin" href="">Orders</a>
            </div>
            <div class="log_out-container d-flex justify-content-end align-items-center align-self-stretch">
                <a class="logout link-offset-3-hover" href="">Log out</a>
                <img src="../img/Recurso 15-8.png" width="40px" alt="">
            </div>
        </div>
    </div>
    <!-- Dashboard -->
    <div class="dashboard container-fluid d-flex flex-column align-items-center justify-content-start">
        <div class="profile_notifications container-fluid d-flex justify-content-between align-items-start">
            <div class="d-flex align-items-center gap-2">
                <p class="welcome_admin">Welcome! Administrator</p>
                <img class="profile_picture" src="../img/cat-5773481_1280.jpg" alt="">
            </div>
            <img src="../img/notificacion.png" width="40px" alt="">
        </div>
        <div class="container_dashboard_fields container-fluid d-flex flex-column align-items-center justify-content-start align-self-stretch">
            <div class="d-flex justify-content-center align-items-center ">
                <h6 class="users_title_admin" align='center'> Update </h6>
            </div>
            <?php
            $server_name = "localhost";
            $nombre_BD = "trendy _commce"; // Nombre de la base de datos con espacio
            $user_name = "root";
            $contraseña = "12345";

            $conexion = mysqli_connect($server_name, $user_name, $contraseña, $nombre_BD);
            ?>

            <?php
            $ide = $_GET["ide"];

            $consulta = "SELECT * FROM users WHERE id_users = '$ide'"; // Cambiado LIKE a =

            if ($resultado = mysqli_query($conexion, $consulta)) {
                $row = mysqli_fetch_array($resultado);
                echo "<div align='center'>
                    <table border='0' width='600' style='font-family: verdana; font-size: 8pt' id='table1'>
                        <form method='POST' action='actualizaciones3.php'>
                            <tr>
                                <td width='50%'><p align='center'><b>ID</b></td>
                                <td width='50%'><p align='center'><input type='text' name='id_users' size='20' value='$ide' disabled='disabled'></td>
                            </tr>

                            <tr>
                                <td width='50%'><p align='center'><b>Nombre</b></td>
                                <td width='50%'><p align='center'><input type='text' name='Nombre' size='20' value='". $row['name'] ."'></td>
                            </tr>

                            <tr>
                                <td width='50%'><p align='center'><b>Apellido</b></td>
                                <td width='50%'><p align='center'><input type='text' name='Apellido' size='20' value='". $row['surname'] ."'></td>
                            </tr>

                            <tr>
                                <td width='50%'><p align='center'><b>Telefono</b></td>
                                <td width='50%'><p align='center'><input type='text' name='Telefono' size='20' value='". $row['email'] ."' ></td>
                            </tr>

                            <tr>
                                <td width='50%'><p align='center'><b>Direccion</b></td>
                                <td width='50%'><p align='center'><input type='text' name='Direccion' size='20' value='". $row['address'] ."'></td>
                            </tr>

                            <tr>
                                <td width='50%'><p align='center'><b>Correo</b></td>
                                <td width='50%'><p align='center'><input type='text' name='Correo' size='20' value='". $row['phone_number'] ."' ></td>
                            </tr>

                            <input type ='hidden' name='id_users' value='$ide'>

                            <tr>
                                <td colspan='2' width='50%'><p align='center'><input type='submit' name='B1' value='Actualizar datos'></td>
                            </tr>
                        </form>
                    </table>
                </div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
