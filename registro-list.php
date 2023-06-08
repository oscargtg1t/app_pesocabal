<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lista de pesajes</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="./css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="./css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="./js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">


</head>
<body>
	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="./assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						<br><small class="roboto-condensed-light">PESO CABAL</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="home.html"><i class="fab fa-dashcube fa-fw"></i> &nbsp; DASHBOARD</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>

		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"></i>
				</a>
				<a href="#" class="btn-exit-system">
					<i class="fas fa-power-off"></i>
				</a>
			</nav>

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; REGISTRO DE PESAJES
				</h3>
				<p class="text-justify">
				
				</p>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					
                    <li>
						<a href="registro-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PESAJE</a>
					</li>

					<li>
						<a class="active" href="registro-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PESAJES</a>
					</li>
					<li>
						<a href="registro-search.php"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR CARGAMENTO</a>
					</li>
				</ul>	
			</div>
			
			<!-- Content here-->
			<div class="container-fluid">
				<form class="form-neon">
					<table>
						<tr>
						<th style="padding-right: 35px;">NO. DE CARGAMENTO</th>
						<th style="padding-right: 35px;">NO. DE PARCIALIDAD</th>
						<th style="padding-right: 35px;">PESO</th>
						</tr>
				<?php
				$url = 'http://143.110.209.5/pesajes.php';
				$pesajes = json_decode(file_get_contents($url));
				foreach ($pesajes as $pesaje) {
					echo '<tr>';
					echo '<td style="padding-right: 35px;">'.$pesaje->id_cargamento.'</td>';
					echo '<td style="padding-right: 35px;">'.$pesaje->no_parcialidad.'</td>';
					echo '<td style="padding-right: 35px;">'.$pesaje->peso_parcialidad.'</td>';
					echo '</tr>';
				}
				?>
					</table>
				</form>
			</div>

		</section>
	</main>
	
	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="./js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="./js/main.js" ></script>
</body>
</html>
