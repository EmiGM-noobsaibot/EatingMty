<?php
include 'db_connect.php';
session_start();
$uid = $_SESSION['uid'];
$oid = $_GET['oid'];
if (!isset($_SESSION['uid'])) {
    header('Location: ./error.php?no=3');
}

$sqlo = "select Address.state as state,Address.city as city,Address.street as street,Address.pincode as pin,Menu.item_name as mname,order_id as oid,order_total as price,Drivers.name as dname,delivery_status as status,Menu.img as img,Drivers.phone from Orders,Menu,Drivers,Address where Orders.menu_id=Menu.menu_id  and Orders.driver_id=Drivers.driver_id and Orders.user_id=Address.user_id and order_id=$oid;";
$reso = mysqli_query($mysqli, $sqlo);
$row = mysqli_fetch_assoc($reso);
$mname = $row["mname"];
$price = $row["price"];
$dname = $row["dname"];
$status = $row["status"];
$img = $row["img"];
$phone = $row["phone"];
$state = $row["state"];
$street = $row["street"];
$city = $row["city"];
$pin = $row["pin"];
if ($status == "cooking") {
    $st = 1;
} elseif ($status == "pending") {
    $st = 2;
} elseif ($status == "delivered") {
    $st = 3;
}
$sqll = "select * from Payment where order_id=$oid;";
$ress = mysqli_query($mysqli, $sqll);
$rest = mysqli_fetch_assoc($ress);
$pid = $rest["payment_id"];
$pm = $rest["payment_method"];
$pst = $rest["status"];
$pr = $rest["amount"];
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
    <link rel="stylesheet" href="./css/style.css">
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
                    <div class="menu-item active">
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
            <div class="right-menu">
                <div class="cart-btn">
                    <i class='bx bx-cart-alt'></i>
                </div>
            </div>
        </div>
    </div>
    <section>
        <section class="root">
            <figure>
                <img src="<?php echo $img ?>" alt="" class="figure-img">
                <figcaption>
                    <h4>Detalles de seguimiento:</h4></br>
                    <h4><?php echo $mname ?></h4>
                    <h6>Número de pedido # <?php echo $oid ?></h6></br>

                    <h4>Agente de entrega: <strong><?php echo $dname ?></strong></h4>
                    <h6>Llamar:<a href="tel:+91<?php echo $phone ?>"> <?php echo $phone ?></a></h6>
                    <br>
                    <h4>Dirección de envío:</h4>
                    <h6><?php echo <<<out
                    Calle: {$street}</br>Ciudad: {$state}</br>Código postal: {$pin}
                    out;
                        ?></h6><br>
                    <h4>Detalles de pago:</h4>
                    <h6><?php echo <<<out
                    ID de transacción: {$pid}</br>Método de pago: {$pm}</br>Estado: {$pst}</br> Precio: $ {$pr} MXN
                    out;
                        ?></h6>
                </figcaption>
            </figure>
            <div class="order-track">

                <?php echo <<<print
    <div class="order-track-step">
      <div class="order-track-status">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat">Cocción</p>
        <span class="order-track-text-sub">Tu pedido se está cocinando</span>
      </div>
    </div>
    print;
                ?>
                <?php
                if ($st == 2) {
                    echo <<<out1
        <div class="order-track-step">
        <div class="order-track-status">
          <span class="order-track-status-dot"></span>
          <span class="order-track-status-line"></span>
        </div>
        <div class="order-track-text">
          <p class="order-track-text-stat">La comida está en camino</p>
          <span class="order-track-text-sub">Nuestro agente de entrega entregará su pedido pronto.</span>
        </div>
        </div>
        </div>
        out1;
                } elseif ($st == 3) {
                    echo <<<out1
        <div class="order-track-step">
        <div class="order-track-status">
          <span class="order-track-status-dot"></span>
          <span class="order-track-status-line"></span>
        </div>
        <div class="order-track-text">
          <p class="order-track-text-stat">La comida está en camino</p>
          <span class="order-track-text-sub">Nuestro agente de entrega entregará su pedido pronto.</span>
        </div>
        </div>
        <div class="order-track-step">
        <div class="order-track-status">
          <span class="order-track-status-dot"></span>
          <span class="order-track-status-line"></span>
        </div>
        <div class="order-track-text">
          <p class="order-track-text-stat">Entregada</p>
          <span class="order-track-text-sub">Tu comida se entrega en la puerta de tu casa.</span>
        </div>
        </div>
        </div>
        <div class="col-md-4 col-sm-4 margin-bottom-40">
        <a href="./download.php?oid=$oid" class="btn btn-mod btn-border btn-circle btn-medium">Descargar factura</a>
        </div>
        out1;
                }
                ?>

        </section>
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