<?php

use PhpMyAdmin\Table;

include 'db_connect.php';

session_start();
?>

<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EATING MTY</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- MOBILE NAV -->
    <div class="mb-nav">
        <div class="mb-move-item"></div>
        <div class="mb-nav-item">
            <a href="./index.php">
                <i class="bx bxs-home"></i>
            </a>
        </div>
        <div class="mb-nav-item active">
            <a href="./res.php">
                <i class='bx bxs-wink-smile'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="./order.php">
                <i class='bx bxs-food-menu'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="./login.php">
                <i class='bx bxs-comment-detail'></i>
            </a>
        </div>
    </div>
    <!-- END MOBILE NAV -->
    <!-- BACK TO TOP BTN -->
    <a href="#home" class="back-to-top">
        <i class="bx bxs-to-top"></i>
    </a>
    <!-- END BACK TO TOP BTN -->
    <!-- TOP NAVIGATION -->
    <div class="nav">
        <div class="menu-wrap">
            <a href="./index.php">
                <div class="logo">
                    EATING MTY
                </div>
            </a>
            <div class="menu h-xs">
                <a href="./index.php">
                    <div class="menu-item">
                        Inicio
                    </div>
                </a>
                <a href="./res.php">
                    <div class="menu-item active">
                        Restaurantes
                    </div>
                </a>
                <a href="./order.php">
                    <div class="menu-item">
                        Pedidos
                    </div>
                </a>
                <a href="./login.php">
                    <div class="menu-item">
                        <?php
                        if (!isset($_SESSION['uid'])) {
                            echo "Iniciar sesión";
                        } else {
                            echo "Perfil";
                        }
                        ?>
                    </div>
                </a>
            </div>
            <div class="right-menu">
                <!-- <div class="cart-btn">
                    <i class='bx bx-cart-alt'></i>
                </div> -->
            </div>
        </div>
    </div>
    <!-- END TOP NAVIGATION -->
    <!-- FOOD MENU SECTION -->
    <section class="align-items-center bg-img bg-img-fixed" id="food-menu-section"
        style="background-image: url(assets/katherine-chase-4MMK78S7eyk-unsplash.jpg);">
        <div class="">
            <div class="food-menu">
                <h1>
                    ¿Dónde vas a <span class="third-color">comer</span> hoy?
                </h1>
                <p>
                    Date un capricho con una experiencia gourmet con EATING MTY, la plataforma de pedidos de comida en línea para restaurantes. Elige entre una amplia variedad de cocinas y categorías, y recibe comida fresca en minutos.
                </p>
                <div class="container-food">
                    <?php
                    $sqlrescard = "SELECT * FROM `Restaurants`";
                    $resrescard = mysqli_query($mysqli, $sqlrescard);
                    if (mysqli_num_rows($resrescard) > 0) {
                        while ($row = mysqli_fetch_assoc($resrescard)) {
                            $res_name = $row["name"];
                            $res_desp = $row["desp"];
                            $res_img = $row["img"];
                            $res_num = $row["restaurant_id"];
                            echo
                            '<a class="material-card" href="./rest.php?res_num=' . $res_num . '">
                                <img class="card-picture" src="' . $res_img . '">
                                <div class="card-info">
                                    <h2 class="card-title">' . $res_name . '</h2>
                                    <p class="card-desc">' . $res_desp . '</p>
                                </div>
                            </a>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- END FOOD MENU SECTION -->

    <!-- FOOTER SECTION -->
    <section class="footer bg-img" style="background-color: var(--third-color);">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <h1>
                        EATING MTY
                    </h1>
                    <br>
                    <p>EATING MTY es un servicio de entrega de comida que lleva deliciosas comidas a la puerta de su casa en minutos. Lo que sea que desees de pizza, pasta, biriyani.</p>
                    <br>
                    <p>Email: <a href="mailto:contact@yummie.com">contacto@eatingmty.com</a></p>
                    <p>Teléfono: <a href="tel:+528176809991">+528176809991</a></p>
                    <p>Sitio Web: eatingmty.com.mx</p>
                </div>
                <div class="col-2 col-xs-12">
                    <h1>
                        Acerca de nosotros
                    </h1>
                    <br>
                    <p>
                        <a href="#">
                            Política de privacidad
                        </a>
                    </p>
                    <p>
                        <a href="#">
                            Contacto
                        </a>
                    </p>
                    <p>
                        <a href="#">
                            Acerca de
                        </a>
                    </p>
                </div>
                <div class="col-4 col-xs-12">
                    <h1>
                        Suscríbete & medios
                    </h1>
                    <br>
                    <p>Suscríbete para recibir información oficial, descuentos y mucho más</p>
                    <div class="input-group" style="background-color: var(--secondary-color);">
                        <input required="text" placeholder="Ingresa tu correo electrónico">
                        <button onClick="window.location.href='./login.php';">
                            Suscribirse
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FOOTER SECTION -->

    <script src="js/main.js"></script>
</body>

</html>