<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/my-login.css">
	<script src="./js/cities.js"></script>
	<script src="js/javascript.js"></script>
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
				</a>
				<a href="./order.php">
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

	<!-- END TOP NAVIGATION -->
	<div class="my-login-page reg">
		<section class="h-100">
			<div class="container h-100">
				<div class="row justify-content-md-center h-100">
					<div class="card-wrapper">
						<!-- <div class="brand">
						<img src="img/logo.jpg" alt="bootstrap 4 login page">
					</div> -->
						<div class="card-fat">
							<div class="card-body">
								<h4 class="card-title">Registro</h4>
								<form method="POST" class="my-login-validation" action="./reg-validate.php">
									<div class="form-group">
										<label for="name">Nombre</label>
										<input id="name" type="text" class="form-control" name="name" required autofocus placeholder="Ingresa tu nombre">
										<div class="invalid-feedback">
											¿Cuál es tu nombre?
										</div>
									</div>

									<div class="form-group">
										<label for="email">Dirección de correo electrónico</label>
										<!-- <input id="email" type="email" class="form-control" name="email" required> -->
										<input id="email" type="email" class="form-control" pattern="[^ @]*@[^ @]*" required placeholder="Ingresa tu correo" name="email">
										<div class="invalid-feedback">
											Tu correo es inválido
										</div>
									</div>

									<div class="form-group">
										<label for="password">Contraseña</label>
										<input type="password" name="password" required class="form-control" placeholder="Ingresa tu contraseña">
										<!-- <input type="checkbox" onclick="myFunction()">Show Password 	 -->
										<div class="invalid-feedback">
											La contraseña es necesaria
										</div>
									</div>

									<div class="form-group">
										<label for="State">Estado</label>
										<select onchange="print_city('state', this.selectedIndex);" id="sts" name="stt" class="form-control" required></select>
										<div class="invalid-feedback">
										</div>
									</div>

									<div class="form-group">
										<label for="State">Ciudad</label>
										<select onchange="print_city('city', this.selectedIndex);" id="sts" name="stt" class="form-control" required>
											<option value="">Seleccionar Ciudad</option>
											<option value="Monterrey">Monterrey</option>
											<option value="San Nicolás de los Garza">San Nicolás de los Garza</option>
											<option value="Guadalupe">Guadalupe</option>
											<option value="San Pedro Garza García">San Pedro Garza García</option>
											<option value="Santa Catarina">Santa Catarina</option>
											<option value="Apodaca">Apodaca</option>
											<option value="Escobedo">Escobedo</option>
											<option value="San Juan de los Garza">San Juan de los Garza</option>
											<option value="Linares">Linares</option>
											<option value="Montemorelos">Montemorelos</option>
											<option value="Santiago">Santiago</option>
											<option value="General Terán">General Terán</option>
											<option value="Villa de Santiago">Villa de Santiago</option>
											<option value="Cadereyta Jiménez">Cadereyta Jiménez</option>
											<option value="Ramos Arizpe">Ramos Arizpe</option>
											<option value="Allende">Allende</option>
											<option value="Hualahuises">Hualahuises</option>
											<option value="Cerralvo">Cerralvo</option>
											<option value="Galeana">Galeana</option>
											<option value="Los Aldamas">Los Aldamas</option>
											<option value="El Carmen">El Carmen</option>
											<option value="Fabrica de Hielo">Fabrica de Hielo</option>
											<option value="Pesquería">Pesquería</option>
											<option value="Salinas Victoria">Salinas Victoria</option>
											<option value="Doctor González">Doctor González</option>
										</select>
										<div class="invalid-feedback">
											Ciudad
										</div>
									</div>

									<div class="form-group">
										<label for="Address">Domicilio</label>
										<input id="number" type="text" class="form-control" name="address" required data-eye placeholder="Ingresa tu domiclio">
										<div class="invalid-feedback">
											Domicilio
										</div>
									</div>

									<div class="form-group">
										<label for="street">Calle</label>
										<input id="number" type="text" class="form-control" name="street" required data-eye placeholder="Ingresa la dirección de tu calle">
										<div class="invalid-feedback">
											Calle
										</div>
									</div>



									<div class="form-group">
										<label for="pincode">Código postal</label>
										<input id="number" type="" class="form-control" name="pincode" required data-eye minlength="5" maxlength="5" min="00000" max="99999" placeholder="Ingresa tu código postal">
										<div class="invalid-feedback">
											El código postal es necesario
										</div>
									</div>
									<script language="javascript">
										print_state("sts");
									</script>
									<div class="form-group">
										<label for="pincode">Teléfono</label>
										<input type="number" class="form-control" name="phone" required placeholder="Ingresa tu teléfono" minlength="10">
										<div class="invalid-feedback">
											El teléfono es necesario
										</div>
									</div>


									<!-- <div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
										<div class="invalid-feedback">
											You must agree with our Terms and Conditions
										</div>
									</div>
								</div> -->

									<div class="form-group m-0">
										<button type="submit" class="btn btn-primary btn-block">
											Registrarse
										</button>
									</div>
									<div class="mt-4 text-center">
										¿Ya tiene una cuenta? <a href="./login.php">Inicia Sesión</a>
									</div>
								</form>
							</div>
						</div>
						<!-- <div class="footer">
						Copyright &copy; 2017 &mdash; Your Company 
					</div> -->
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script> -->
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

</html>