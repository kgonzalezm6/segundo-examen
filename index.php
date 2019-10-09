<?php
$servidor= "localhost";
$usu= "id11146414_root";
$clave="Ajce3rgx";
$basedatos="id11146414_cv";
$enlace =mysqli_connect($servidor, $usu, $clave, $basedatos);
if(!$enlace){
	echo "Error de conexion";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Curriculum Vitae</title>
	<meta charset="UTF-8">
	<meta name="description" content="Civic - CV Resume">
	<meta name="keywords" content="resume, civic, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section start -->
	<header class="header-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
	
				</div>
				
		</div>
	</header>
	<!-- Header section end -->

	<!-- Hero section start -->
	<section class="hero-section spad"id="inicio">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
						<div class="col-lg-6">
							<div class="hero-text">
								<h2>Kevin González</h2>
								<p>Como estudiante de cuarto año de ingeniería en sistemas, me encantaría poder entrar a formar parte de una empresa en la que poder aplicar todos mis conocimientos y, al mismo tiempo, que me permita desarrollarme profesionalmente.

Gracias a mi formación, considero que puedo aportar valor y seguir desarrollándome profesionalmente en una compañía que coincida con mis valores y expectativas.

Como persona organizada y con una gran motivación, soy capaz de adaptarme a cualquier circunstancia y dar siempre lo mejor de mí en cualquier proyecto, al mismo tiempo que me esfuerzo por trabajar en equipo y fomentar valores como los del compañerismo.</p>
							</div>
							<div class="hero-info">
								<h2>Información general</h2>
								<ul>
									<li><span>Fecha de nacimiento: </span>23 de septiembre de 1995</li>
									<li><span>Dirección: </span>35 av. "A" 23-25 residenciales San Rafael "Buena Vista" zona 18</li>
									<li><span>E-mail: </span>kevinricardog23@gmail.com</li>
									<li><span>Telefono: </span>+502 47488401</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6">
							<figure class="hero-image">
								<img src="img/hero.jpg" alt="5">
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Social links section start -->
	<div class="social-section"id="redes">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="social-link-warp">
						<div class="social-links">
							<a href="https://www.pinterest.com/kevinricardog23/"target=»_blank»<i class="fa fa-pinterest"></i></a>
							<a href="https://www.instagram.com/kevinricardog23/"target=»_blank»<i class="fa fa-instagram"></i></a>
							<a href="https://www.facebook.com/kevinricardog23" target=»_blank»<i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/kevinricardog23"target=»_blank»<i class="fa fa-twitter"></i></a>
							
						</div>
						<h2 class="hidden-md hidden-sm">Mis redes sociales</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Social links section end -->

	<!-- Resume section start -->
	<section class="resume-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-7 offset-xl-2">
					
			</div>
		</div>
	</section>
	<!-- Resume section end -->

	<!-- Resume section start -->
	<section class="resume-section with-bg spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-7 offset-xl-2">
					<div class="section-title">
						<h2>Educación</h2>
					</div>
					<ul class="resume-list">
						<li>
							<h2>2013</h2>
							<h3>Bachillerato</h3>
							<h4>Instituto Nacional de Bachillerato en Computación</h4>
							
						</li>
						<li>
							<h2>2015</h2>
							<h3>Universidad</h3>
							<h4>Ingeniería en sistemas de la información y ciencias de la computación</h4>
							
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Resume section end -->


	<!-- Review section start -->
	<section class="review-section spad pb-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-7 offset-xl-2">
					<div class="section-title">
						<h2>Referencias</h2>
					</div>
					<div class="review-slider owl-carousel">
						<div class="single-review">
							<div class="qut">“</div>
							<p> Mi nombre es Valter Estuardo Oliva Celis,soy estudiante de  Ingeniería en Sistemas en la Universidad Mariano Gálvez, actualmente voy en mi cuarto año de carrera, donde experiencias, proyectos y estudios me han permitido evolucionar tanto profesional como personalmente. </p>
							<h3>Valter Oliva</h3>
							<h4>Estudiante de ingeniería en sistemas, UMG</h4>
						</div>
						<div class="single-review">
							<div class="qut">“</div>
							<p> Ingeniero en sistemas y ciencias de la computación graduado en la Universidad Mariano Galvez de Guatemala con experiencia en manejo de bases de datos, servicio tecnico de computadoras y desarrollo web. </p>
							<h3>Javier Aguirre</h3>
							<h4>Ingeniero en sistemas de la universidad Mariano Galvez de Guatemala</h4>
						</div>
						<div class="single-review">
							<div class="qut">“</div>
							<p>Soy un Ingeniero en Sistemas en progreso, estoy cursando mi cuarto año de la carrera. Me considero una persona responsable, puntual, honesta y determinada. Tengo mucha experiencia con el manejo de software y experiencia en la gestión de equipos. Soy capaz de adaptarme a las diferentes necesidades que requiera un trabajo.</p>
							<h3>Carlos Culajay</h3>
							<h4>Estudiante de ingeniería en sistemas</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end -->


	<!-- Portfolio section start -->
	
	<!-- Portfolio section end -->

	<!-- Extra section start -->
	<section class="extra-section spad pb-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-8 offset-xl-2">
					<div class="section-title">
						<h2>Programas</h2>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 pt-5">
							<div class="fact-box trans">
								<div class="fact-content">
									<div class="circle-progress">
										<div id="progress1" class="prog-circle"></div>
										<div class="progress-info">
											<h2>100%</h2>
										</div>
										<div class="prog-title">
											<h3>HTML</h3>
											<p><a href="certi-html.pdf" download > Certificado de HTML </a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 pt-5">
							<div class="fact-box trans">
								<div class="fact-content">
									<div class="circle-progress">
										<div id="progress2" class="prog-circle"></div>
										<div class="progress-info">
											<h2>90%</h2>
										</div>
										<div class="prog-title">
											<h3>CSS</h3>
											<p><a href="certi-css.pdf" download > Certificado de CSS </a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-6">
							<div class="fact-box">
								<div class="fact-content">
									<img src="img/icon/1-w.png" alt="">
									<h2>80%</h2>
									<p>SQL</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="fact-box">
								<div class="fact-content">
									<img src="img/icon/2-w.png" alt="">
									<h2>50%</h2>
									<p>PHP</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Extra section end -->

	<!-- Contact section start -->
	<section class="contact-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-8 offset-xl-2">
					<div class="section-title">
						<h2>Contactame</h2>
					</div>
					<form  action="#" class="contact-form"id="formulario" name="formulario" method="POST">
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="nombre" placeholder="Nombre">
							</div>
							<div class="col-md-6">
								<input type="text" name="correo" placeholder="Correo">
							</div>
							<div class="col-md-12">
								<input type="text" name="asunto" placeholder="Asunto">
								<textarea name="mensaje" placeholder="Mensaje"></textarea>
							</div>
						</div>
						<div class="text-md-right">
							<input type="submit" class="btn" name="envio" value="enviar">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->

	<!-- Footer section start -->
	<footer class="footer-section">
		<div class="container text-center">
			<div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Kevin González <i class="fa fa-heart-o" aria-hidden="true"></i> 

</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php

include("correo.php");
?>
<?php
if(isset($_POST['envio'])){
    $nombre=$_POST["nombre"];
    $correo=$_POST["correo"];
    $asunto=$_POST["asunto"];
    $mensaje=$_POST["mensaje"];

    $insertard = "INSERT INTO contacto VALUES('$nombre','$correo','$asunto','$mensaje')";
    $ejecutar = mysqli_query($enlace,$insertard);
    if(!$ejecutar){
        echo"ERROR EN SQL";
    }
}
?>