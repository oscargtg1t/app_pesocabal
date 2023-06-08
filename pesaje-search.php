<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
	<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
	<title>Buscar</title>

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
					<i class="fas fa-search fa-fw"></i> &nbsp; PESO TOTAL
				</h3>
				<p class="text-justify">
				</p>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					
                    <li>
						<a href="pesaje-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PESAJE</a>
					</li>

					<li>
						<a href="pesaje-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PESAJES</a>
					</li>
					<li>
						<a class="active" href="pesaje-search.php"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR</a>
					</li>
				</ul>	
			</div>
			
			<!-- Content here-->
			<div class="container-fluid">
				<form class="form-neon" action="" method="GET">
					<div class="container-fluid">
						<div class="row justify-content-md-center">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="id_cargamento" class="bmd-label-floating">INGRESE EL NO. DE CARGAMENTO</label>
									<input type="text" class="form-control" name="id_cargamento" id="id_cargamento" maxlength="10" required>
									<p class="text-center" style="margin-top: 40px;">
									<button type="submit" class="btn btn-raised btn-info"><i class="fas fa-search"></i> &nbsp; BUSCAR</button>
									</p>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>

			<div class="container-fluid">
								<p class="text-center" style="font-size: 20px;">
									RESULTADOS
								</p>
								<div class="text-left">
								<button onclick="imprimirPDF()" class="btn btn-success"><i></i>&nbsp;Descargar PDF</button>
								</div> 	
				<form id="form2" class="form-neon">
				<?php
							if (isset($_GET['id_cargamento'])) {
							$url = 'http://localhost:8012/appwebservice/pesaje_total.php?id_cargamento='. urlencode($_GET['id_cargamento']);
							$pesaje = json_decode(file_get_contents($url));
							if ($pesaje !== null) {
								//echo '<h2>Cargamento Encontrado</h2>';
								echo '<p><b>NO. DE CARGAMENTO:</b> '.$pesaje->id_cargamento.'</p>';
								echo '<p><b>CANIDAD DE PARCIALIDADES:</b> '.$pesaje->cant_parcialidades.'</p>';
								echo '<p><b>PESO TOTAL:</b> '.$pesaje->peso_total.'</p>';
								echo '<p><b>TOLERANCIA:</b> '.$pesaje->tolerancia.'</p>';
							  } else {
								echo '<h2>Cargamento no Encontrado</h2>';
							  }
							}
				?>	
				</form>
			</div>

		</section>
	</main>
	
	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->

	<script>
    function imprimirPDF() {
      var element = document.getElementById('form2');
      html2pdf()
        .set({
          margin: 10,
          filename: 'Pesaje_total.pdf',
          image: { type: 'jpeg', quality: 0.98 },
          html2canvas: { dpi: 192, letterRendering: true },
          jsPDF: { unit: 'pt', format: 'a6', orientation: 'portrait' }
        })
        .from(element)
        .save();
    }
    </script>						

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