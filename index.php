<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Vivek Nadig">
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
        <div class="mb-nav-item active">
            <a href="./index.php">
                <i class="bx bxs-home"></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="./res.php">
                <i class='bx bxs-wink-smile'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="./orders.php">
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
            <a href="#home">
                <div class="logo">
                    EATING MTY
                </div>
            </a>
            <div class="menu h-xs">
                <a href="./index.php">
                    <div class="menu-item active">
                        Inicio
                    </div>
                </a>
                <a href="./res.php">
                    <div class="menu-item">
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
                            echo "Iniciar Sesión";
                        } else {
                            echo "Perfil";
                        }
                        ?>
                    </div>
                </a>
            </div>
            <a href="./order.php">
                <div class="right-menu">
                    <!-- <div class="cart-btn">
                        <i class='bx bx-cart-alt'></i>
                    </div> -->
                </div>
            </a>
        </div>
    </div>
    <!-- END TOP NAVIGATION -->
    <!-- SECTION HOME -->
    <section id="home" class="fullheight align-items-center bg-img bg-img-fixed"
        style="background-image: url(img/ff2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <div class="slogan">
                        <h1 class="left-to-right play-on-scroll">
                            EATING MTY
                        </h1>
                        <p class="left-to-right play-on-scroll delay-2">
                            EATING MTY es un servicio de entrega de comida que lleva deliciosas comidas a la puerta de su casa en minutos. Puedes elegir entre una gran variedad de cocinas y restaurantes, y disfrutar de ofertas y descuentos exclusivos.
                        </p>
                        <div class="left-to-right play-on-scroll delay-4">
                            <button onClick="window.location.href='./res.php';">
                                Ordene Ahora
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION HOME -->
    <!-- SECION ABOUT -->
    <section class="about fullheight align-items-center" id="about">
        <div class="container">
            <div class="row">
                <div class="col-7 h-xs">
                    <img src="assets/Untitled design.png" alt="" width: 15px;
                        height: 15x;
                        class="fullwidth left-to-right play-on-scroll">
                </div>
                <div class="col-5 col-xs-12 align-items-center">
                    <div class="about-slogan right-to-left play-on-scroll">
                        <h3>
                            <span class="third-color">Creamos</span> recuerdos <span class="third-color">deliciosos</span> para <span class="third-color">ti</span>
                        </h3>
                        <p>
                            ¿Tienes hambre de comida deliciosa, pero no tienes tiempo o energía para cocinar o salir? No te preocupes ¡Te tenemos cubierto! Nuestro servicio de entrega de comida a domicilio es la mejor manera de disfrutar de sus platos favoritos de una variedad de Cocinas, entregadas directamente en su puerta en minutos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECION ABOUT -->
    <!-- FOOD MENU SECTION -->
    <section class="align-items-center bg-img bg-img-fixed" id="food-menu-section"
        style="background-image: url(assets/katherine-chase-4MMK78S7eyk-unsplash.jpg);">
        <div class="container">
            <div class="food-menu">
                <h1>
                    ¿Qué vas a <span class="third-color">comer</span> hoy?
                </h1>
                <p>
                    Disfrute de una experiencia gourmet con EATING MTY, la plataforma de pedidos de comida en línea para restaurantes. Elija entre una amplia gama de cocinas y categorías, y obtenga comida fresca a domicilio en minutos
                </p>
                <div class="food-category">
                    <!-- <div class="zoom play-on-scroll"> -->



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