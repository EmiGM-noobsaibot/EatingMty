<?php
session_start();
include './db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>EATING MTY</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/my-login.css">
	<link rel="stylesheet" href="./css/style.css">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>


<body class="my-login-page log">
	<!-- MOBILE NAV -->
	<div class="mb-nav">
		<div class="mb-move-item"></div>
		<div class="mb-nav-item">
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
			<a href="./order.php">
				<i class='bx bxs-food-menu'></i>
			</a>
		</div>
		<div class="mb-nav-item active">
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
				<!-- <div class="cart-btn">
					<i class='bx bx-cart-alt'></i>
				</div> -->
			</div>
		</div>
	</div>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="card-fat">
						<div class="card-body">
							<?php
							if (!isset($_SESSION['uid'])) {
								echo <<<login
							<h4 class="card-title">Iniciar Sesión</h4>
							<form method="POST" class="login-validate.php" action="./login-validate.php">
							<div class="form-group">
							<label for="email">Correo Electrónico</label>
							<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
							<div class="invalid-feedback">
							Correo inválido
							</div>
							</div>
							<div class="form-group">
							<label for="password">Contraseña
							</label>
							<input id="password" type="password" class="form-control" name="password" required data-eye>
							<div class="invalid-feedback">
							La contraseña es necesaria
							</div>
							</div>
							<div class="form-group m-0">
							<button type="submit" class="btn btn-primary btn-block">
							Iniciar Sesión
							</button>
							</div>
							<div class="mt-4 text-center">
							¿No tienes una cuenta? <a href="./register.php">Crea una</a>
							</div>
							</form>
							</div>
							login;
							} else {
								$user_id = $_SESSION['uid'];
								$sql = "select * from Users where user_id=$user_id";
								$result = mysqli_query($mysqli, $sql);
								$row = mysqli_fetch_assoc($result);
								$name = $row["name"];
								$email = $row["email"];
								$ph = $row["phone"];
								$sqla = "SELECT * FROM `Address` where user_id=$user_id";
								$addrow = mysqli_query($mysqli, $sqla);
								$ar = mysqli_fetch_assoc($addrow);
								$state = $ar["state"];
								$city = $ar["city"];
								$street = $ar["street"];
								$pin = $ar["pincode"];
								echo <<<in
							<h2 style="text-align:center;">¡Bienvenido, <strong>$name</strong>!</h2>
							<br></br>
							<h5>
							<strong>Correo: </strong>{$email}</br></br>
							<strong>Teléfono: </strong>{$ph}</br></br>
							<strong>Calle: </strong>{$street}<br><br>
							<strong>Ciudad: </strong>{$state}</br><br>
							<strong>Código Postal: </strong>{$pin}
							</h5></br>
							<form action="login.php" method="post">
							<input type="submit" name="logout" value="Salir" style="background-color: #3D7065;border-radius: 1.5rem;border:none; color: white;padding: 16px 32px;text-decoration: none;margin: 4px 2px;
							cursor: pointer;display: block;width: 100px;margin: 0 auto;">
							</form>
							in;
								if (isset($_POST['logout'])) {
									session_destroy();
									header('Location: ./login.php');
								}
							}
							if (isset($_SESSION['active'])) {
								echo $_SESSION['active'];
							} else {
								echo ""; // O cualquier mensaje predeterminado
							}

							?>
						</div>
					</div>
				</div>
			</div>
</body>

</html>