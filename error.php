<?php

$status = $_GET['no'];

?>
<!DOCTYPE html>

<html lang="en">

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
    <a href="#" class="back-to-top">
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
                    <div class="menu-item active">
                        Iniciar Sesión
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
    <section class="card-lo">
        <div class="card-login" style="text-align: center;">
            <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">

                <?php
                if ($status == 1) {
                    echo <<<success
                  <i class="checkmark">✓</i>
                  </div>
                  <h1 style="color: #88B04B;font-weight: 900;font-size: 40px;margin-bottom: 10px;">Éxito</h1> 
                  <p style="color: #404F5E;font-size:20px;margin: 0;">Usuario registrado exitosamente<br/>Ahora puedes iniciar sesión a través de las credenciales</p>
                  success;
                    header("refresh:5;url=./login.php");
                } elseif ($status == 0) {
                    echo <<<fail
                    <i class="checkmark"  style="color: #ff3333;">☓</i>
                    </div>
                    <h1 style="color: #ff3333;font-weight: 900;font-size: 40px;margin-bottom: 10px;">Error</h1> 
                    <p style="color: #404F5E;font-size:20px;margin: 0;">La usuario ya existe<br/>Intente registrarse con un nuevo correo electrónico</p>
                    fail;
                    header("refresh:5;url=./register.php");
                } elseif ($status == 2) {
                    echo <<<invalid
                    <i class="checkmark"  style="color: #ff3333;">☓</i>
                    </div>
                    <h1 style="color: #ff3333;font-weight: 900;font-size: 40px;margin-bottom: 10px;">Error</h1> 
                    <p style="color: #404F5E;font-size:20px;margin: 0;">Nombre de usuario o contraseña no válidos<br/>Intente usar el correcto</p>
                    invalid;
                    header("refresh:3;url=./login.php");
                } elseif ($status == 3) {
                    echo <<<invalid
                    <i class="checkmark"  style="color: #ff3333;">☓</i>
                    </div>
                    <h1 style="color: #ff3333;font-weight: 900;font-size: 40px;margin-bottom: 10px;">Error</h1> 
                    <p style="color: #404F5E;font-size:20px;margin: 0;">Por favor, inicie sesión primero<br/>Para realizar pedidos desde nuestro sitio web, inicie sesión primero</p>
                    invalid;
                    header("refresh:3;url=./login.php");
                }

                ?>



            </div>
    </section>
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

</body>