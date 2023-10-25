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
    <!----------------Menu------------->
    <div class="menu_admin d-flex flex-column align-items-start align-self-stretch">
        <div class="logo_admin w-fill d-flex justify-content-center align-items-center align-self-stretch">
        <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58" fill="none">
  <g clip-path="url(#clip0_616_63)">
    <path d="M0.435816 22.6373C0.458359 22.485 0.478398 22.335 0.500941 22.1827C2.2593 18.0678 5.53806 15.9839 10.3347 15.9585C21.2957 15.8962 32.2566 15.82 43.22 15.8108C45.6973 15.8108 48.2096 15.8593 50.6417 16.2354C54.3237 16.8032 56.275 19.3671 57.8304 22.2265C57.9106 23.5927 57.9907 24.9613 58.0709 26.3275C57.7453 26.5606 57.7503 26.7983 58.0609 27.0383C58.0609 33.7241 58.0559 40.4075 58.0534 47.0932C58.0008 47.8686 57.9457 48.6441 57.8931 49.4195C56.6732 55.6114 54.0532 57.3191 45.0861 57.7669C43.3327 57.7738 41.5794 57.783 39.826 57.7899C30.6585 57.7576 21.491 57.7253 12.3235 57.6907C3.62942 57.6584 0.551037 54.9075 0.220405 46.874C0.2179 40.4098 0.215395 33.9479 0.212891 27.4837C0.295549 25.9467 0.375702 24.4097 0.458359 22.875C0.450845 22.7942 0.443331 22.7135 0.435816 22.6327V22.6373ZM30.3129 35.2957C36.5473 35.6395 43.0272 29.1569 42.7992 22.7781C42.1154 21.9103 41.1962 21.2365 40.0014 21.5734C38.7866 21.9173 38.3983 22.9373 38.3107 24.0774C38.0126 27.9637 33.5891 31.4624 29.078 31.4139C24.344 31.3632 20.0057 27.8345 19.7878 23.8443C19.7227 22.6419 19.0163 21.9288 17.784 21.7419C16.5115 21.548 15.6023 22.2773 15.3869 23.2766C15.209 24.1028 15.5848 25.0467 15.7952 25.9213C16.9949 30.8854 22.8561 35.5403 27.5526 35.2818C27.8031 35.2818 28.0561 35.2772 28.3066 35.2749C28.8877 35.2749 29.4713 35.2749 30.0524 35.2749C30.1401 35.2818 30.2252 35.2864 30.3129 35.2934V35.2957Z" fill="#A21AB8"/>
    <g style="mix-blend-mode:darken">
      <path d="M57.8303 22.2265C56.2748 19.3671 54.3236 16.8031 50.6416 16.2354C48.2094 15.8592 45.6971 15.8108 43.2199 15.8108C32.2589 15.82 21.298 15.8961 10.3346 15.9585C5.53791 15.9862 2.25664 18.0701 0.500789 22.1826C0.162643 16.84 -0.44602 11.4282 0.811382 6.19179C1.59037 2.95162 4.46586 0.812272 8.2055 0.304553C10.4523 -7.85998e-05 12.7667 0.0483855 15.0536 0.0437699C25.8166 0.0206917 36.5797 -0.0623896 47.3403 0.0876184C51.5458 0.145314 55.3931 1.52308 57.0338 5.48098C57.8203 7.38031 57.8804 9.58658 57.9856 11.6659C58.1609 15.183 58.4014 18.714 57.8303 22.2265ZM20.3437 6.93952C18.7281 6.91644 17.8614 7.70802 17.8289 8.98194C17.7938 10.4105 18.5427 11.3936 20.3512 11.3451C22.0394 11.299 22.7307 10.3159 22.7508 9.00963C22.7733 7.60648 21.7288 6.96721 20.3437 6.93952ZM37.7569 11.3636C39.1997 11.2044 40.2868 10.4589 40.2667 9.07425C40.2492 7.78187 39.3274 6.95567 37.7569 6.95106C36.1364 6.94644 35.3398 7.82572 35.3799 9.13887C35.4175 10.3459 36.1614 11.2828 37.7569 11.3636Z" fill="#59AEC7" fill-opacity="0.5"/>
    </g>
    <path d="M0.213376 27.4883C0.215881 33.9525 0.218386 40.4144 0.220891 46.8785C0.143242 44.603 -0.00954954 42.3298 0.000469598 40.0543C0.0205079 35.8656 0.138233 31.677 0.213376 27.4883Z" fill="#CBE4F7"/>
    <path d="M39.8281 57.7921C41.5815 57.7852 43.3348 57.776 45.0882 57.769C43.3373 58.0944 41.5815 58.0506 39.8281 57.7921Z" fill="#CBE4F7"/>
    <path d="M57.8965 49.4217C57.9491 48.6463 58.0042 47.8709 58.0568 47.0955C58.4375 47.8963 58.7231 48.6925 57.8965 49.4217Z" fill="#CBE4F7"/>
    <path d="M58.0637 27.0406C57.7531 26.8006 57.7481 26.5629 58.0737 26.3298C58.4143 26.5698 58.4168 26.8076 58.0637 27.0406Z" fill="#CBE4F7"/>
    <path d="M0.43712 22.6372C0.444634 22.718 0.452148 22.7988 0.459663 22.8795C0.4271 22.8241 0.389529 22.7711 0.36949 22.7134C0.364481 22.6972 0.414576 22.6626 0.43712 22.6372Z" fill="#CBE4F7"/>
    <path d="M27.5527 35.284C27.8032 35.284 28.0562 35.2794 28.3067 35.2771C28.0562 35.2771 27.8032 35.2817 27.5527 35.284Z" fill="#CBE4F7"/>
    <path d="M20.3443 6.93946C21.7294 6.96715 22.7739 7.60411 22.7514 9.00957C22.7313 10.3181 22.04 11.3012 20.3518 11.3451C18.5433 11.3935 17.7919 10.4104 17.8295 8.98187C17.862 7.70796 18.7287 6.91638 20.3443 6.93946Z" fill="#833D8F"/>
    <path d="M37.7554 11.3613C36.1599 11.2805 35.416 10.3435 35.3784 9.13656C35.3383 7.8211 36.1323 6.94413 37.7554 6.94875C39.3259 6.95336 40.2477 7.77956 40.2652 9.07194C40.2853 10.4566 39.2007 11.2021 37.7554 11.3613Z" fill="#833D8F"/>
  </g>
  <defs>
    <clipPath id="clip0_616_63">
      <rect width="58" height="58" fill="white"/>
    </clipPath>
  </defs>
</svg>
            <h5 class="admin_text">ADMIN</h5>
        </div>
        <div class="admin_menu_container container-fluid d-flex flex-column justify-content-between align-items-start">
            <div class="menu-admin d-flex flex-column align-items-start">
                <a class="link_menu_admin" href="../Index.html">Home</a>
                <a class="link_menu_admin" href="./products/addproduct.php">Add product</a>
                <a class="link_menu_admin" href="./products/viewProduct.php">Update</a>
                <a class="link_menu_admin" href="./products/viewDeleteProduct.php">Delete</a>
                <a class="link_menu_admin" href="">Users</a>
                <a class="link_menu_admin" href="">See all products</a>
                <a class="link_menu_admin" href="">Orders</a>
            </div>
            <div class="log_out-container d-flex justify-content-end align-items-center align-self-stretch">
                <a class="logout link-offset-3-hover" href="">Log out</a>
                <img src="../img/Recurso 15-8.png" width="40px" alt="">
            </div>
        </div>
    </div>
    <!------------------Dashboard--------------->
    <div class="dashboard container-fluid d-flex flex-column align-items-center justify-content-start">
        <div class="profile_notifications container-fluid d-flex justify-content-between align-items-start">
            <div class="d-flex align-items-center gap-2">
                <p class="welcome_admin">Welcome! Administrator</p>
                <img class="profile_picture" src="../img/cat-5773481_1280.jpg" alt="">
            </div>
            <img src="../img/notificacion.png" width=" 40px" alt="">
        </div>
        <div class="container_dashboard_fields container-fluid d-flex flex-column align-items-center justify-content-start align-self-stretch">
        <div class="d-flex container-view-users justify-content-center flex-column container-fluid align-items-center "><h6 class="users_title_admin" align='center'> View users </h6>
            <div id="user-details" class="d-flex text-center justify-content-between align-items-center w-100">
                <p class="view_user col-md-2"><span id="user-id"></span></p>
                <p class="view_user col-md-2"><span id="user-name"></span></p>
                <p class="view_user col-md-2"><span id="user-surname"></span></p>
                <p class="view_user col-md-2"><span id="user-email"></span></p>
                <p class="view_user col-md-2"><span id="user-address"></span></p>
                <p class="view_user col-md-2"><span id="user-phone"></span></p>
                </div>
        </div>
        
        
        <?php
        $server_name = "localhost";
        $nombre_BD = "trendy _commce"; // El espacio en el nombre de la base de datos podría causar problemas
        $user_name = "root";
        $contraseña = "12345";

        $conexion = mysqli_connect($server_name, $user_name, $contraseña, $nombre_BD);

    $consulta = "select * from users";

    $resultado = mysqli_query($conexion, $consulta);

    echo "<table class='d-flex table contaner-fluid w-100 table_admin flex-column' align='center'>";
            echo "<tr class='tr_tittles bottom_line bottom_line-top d-flex justify-content-between align-items-center w-100'>
                    <td align='center'>ID</td>
                    <td align='center'>Name</td>
                    <td align='center'>Surname</td>
                    <td align='center'>View</td>
                    <td align='center'>Update</td>
                    <td align='center'>Delete</td>
                </tr>";

                while ($row = mysqli_fetch_array($resultado)) {
                    echo "<tr class='tr_tittles bottom_line d-flex justify-content-between align-items-center w-100'>
                            <td width='10%'>" . $row['id_users'] . "</td>
                            <td width='10%'>" . $row['name'] . "</td>
                            <td width='10%'>" . $row['surname'] . "</td>
                            <td style='display:none;' width='10%'>" . $row['email'] . "</td>
                            <td style='display:none;' width='10%'>" . $row['address'] . "</td>
                            <td style='display:none;' width='10%'>" . $row['phone_number'] . "</td>
                            <td align='center' width='10%'><a class='user-link' href='#' data-user-id='" . $row['id_users'] . "'><img src='../img/admin img/visibilidad.png' width='20%' /></a></td>
                            <td align='center' width='10%'><a href='updates.php?ide=" . $row['id_users'] . "'><img src='../img/admin img/actualizar.png' width='20%' /></a></td>
                            <td align='center' width='10%'><a href='delete.php?ide=" . $row['id_users'] . "'><img src='../img/admin img/borrar.png' width='25%' /></a></td>
                        </tr>";
                }
            echo "</table>";
    ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var userLinks = document.querySelectorAll(".user-link");

        userLinks.forEach(function(link) {
            link.addEventListener("click", function(e) {
                e.preventDefault();
                var userId = this.getAttribute("data-user-id");

                var xhr = new XMLHttpRequest();
                xhr.open("GET", "Consult.php?id=" + userId, true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            var data = JSON.parse(xhr.responseText);
                            if (data) {
                                // Actualizar los detalles del usuario en el área "user-details"
                                document.getElementById("user-id").textContent = data.id_users;
                                document.getElementById("user-name").textContent = data.name;
                                document.getElementById("user-surname").textContent = data.surname;
                                document.getElementById("user-email").textContent = data.email;
                                document.getElementById("user-address").textContent = data.address;
                                document.getElementById("user-phone").textContent = data.phone_number;
                            } else {
                                alert("No se encontraron datos para el usuario.");
                            }
                        } else {
                            alert("Error al cargar los datos del usuario.");
                        }
                    }
                };
                xhr.send();
            });
        });
    });
</script>
        </div>
    </div>
</body>
</html>