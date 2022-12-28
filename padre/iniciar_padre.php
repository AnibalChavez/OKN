<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>OTTO KRAUSE NOTAS</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="../imagenes/escudo.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css.css">
	<link rel="stylesheet" type="text/css" href="../js.js">
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
    		(function() {
  		'use strict';
    		window.addEventListener('load', function() {
      		var forms = document.getElementsByClassName('needs-validation');
      		var validation = Array.prototype.filter.call(forms, function(form) {
        			form.addEventListener('submit', function(event) {
          			if (form.checkValidity() === false) {
            				event.preventDefault();
            				event.stopPropagation();
          			}
          			form.classList.add('was-validated');
        			}, false);
      		});
    		}, false);
  	})();
    </script>
    <div class="container">
		<header>
			<img class="float-md-left" style="width: 100px; height: 100px;" src="../imagenes/escudo.png">
			<h1 class="float-md-left" style="padding-top: 20px;"> Notas <span style="color: #E25F5F">| Otto Krause</span></h1>
		</header>
		<main>
			<div class="overlay">
            	<div class="popup">
            		<form action="achivo_destino.php" method="post" class="needs-validation" novalidate>
            			<div class="form-group">
    						<input type="email" name="introducir_correo" class="form-control" id="validationTooltip01" aria-describedby="emailHelp" placeholder="Correo electrónico" required>
  						</div>
 	 					<div class="form-group">
    						<input type="text" name="introducir_dni" class="form-control" id="validationTooltip02" aria-describedby="emailHelp" placeholder="DNI" required>
  						</div>
  						<div class="form-group">
    						<input type="password" name="introducir_contrasena" class="form-control" id="validationTooltip03" placeholder="Contraseña" required>
  						</div>
  						<div style="text-align: center;">
  							<button type="submit" class="btn btn-outline-primary">Entrar</button>
  							<a href="Registrarse.php" class="btn btn-primary">Registrarse</a>
  						</div>
					</form>
	            </div>
        	</div>
		</main>
		<footer style="bottom: 0; position: absolute;">
			<h6>E.T. N°1 Ing. Otto Krause - Copyright © 2019 Derechos Reservados</h6>
		</footer>
	</div>
</body>
</html>