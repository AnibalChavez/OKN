<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>OTTO KRAUSE NOTAS</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="../imagenes/escudo.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js.js">
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script>
    	var fx = document.getElementById('fx'),
		resultado = document.getElementById('resultado');
		fx.addEventListener('input', function () {
    		var error = true;
    		try{
        		//Si sólo tiene números y signos + - * / ( )
        		if (/^[\d+*()]+$/.test(fx.value)) {
            	// Evaluar el resultado
            		resultado.innerText = eval(fx.value);
            		error = false;
        		}
    		} catch (err) { }
    		if (error) // Si no se pudo calcular
        		resultado.innerText = "Error";
			});
	</script>
	<script>
 		function Calcular() {
 			var vr1 = document.getElementById('t1').value;
 			var vr2 = document.getElementById('t2').value;
 			var vr3 = document.getElementById('t3').value;
 			var p = (parseFloat(vr1)+parseFloat(vr2)+parseFloat(vr3))/3;
 			document.getElementById('promedio').innerHTML = p;
 		}
	</script>
    <div class="container">
		<header>
			<img class="float-md-left" style="width: 100px; height: 100px;" src="../imagenes/escudo.png">
			<h1 class="float-md-left" style="padding-top: 20px;"> Notas <span style="color: #E25F5F">| Otto Krause</span></h1>
			<nav style="padding-top: 105px;">
				<ul class="nav justify-content-md-center nav-tabs">
					<li class="nav-item">
						<a class="nav-link" style="color: #717070" href="../alumno/inicio.php">inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" style="color: #717070" href="../alumno/CicloBasico.php">Ciclo Básico</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " style="color: #717070" href="../alumno/CicloSuperior.php">Ciclo Superior</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="color: #717070" href="../alumno/diciembre.php">Examenes Diciembre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="color: #717070" href="../alumno/febrero.php">Examenes Febrero</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="color: #717070" href="../alumno/libres.php">Libres</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="color: #717070" href="../alumno/previas.php">Previas</a>
					</li>
				</ul>
			</nav>
		</header>
		<main>
			<table class="table">
  				<thead class="thead-light">
    				<tr>
      					<th scope="col">Materias</th>
      					<th scope="col">Primer Trimestre</th>
      					<th scope="col">Segundo Trimestre</th>
      					<th scope="col">Tercer Trimestre</th>
      					<th scope="col">Promedio</th>
      					<th scope="col">Calificacion Anual Definitiva</th>
    				</tr>
  				</thead>
  				<tbody>
    				<tr>
      				 <th scope="row">Historia</th>
                <td>5</td>
                <td>5</td>
                <td>7</td>
                <td>5.66</td>
                <td>5.66</td>
    				</tr>
    				<tr>
      					<th scope="row">Lengua y Literatura</th>
      					<td>5</td>
                <td>5</td>
                <td>7</td>
                <td>5.66</td>
                <td>5.66</td>
    				</tr>
      					<th scope="row">Matematicas</th>
      					<td>5</td>
                <td>7</td>
                <td>7</td>
                <td>6.33</td>
                <td>6.33</td>
    				</tr>
  				</tbody>
			</table>
		</main>
		<footer style="bottom: 0; position: absolute;">
			<h6>E.T. N°1 Ing. Otto Krause - Copyright © 2019 Derechos Reservados</h6>
		</footer>
	</div>
</body>
</html>