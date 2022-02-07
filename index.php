<!doctype html>

<html lang="it">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Across Project</title>
		<meta name="description" content="Progetto per colloquio Across">
		<meta name="author" content="LorenzoGalassi">


		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">

	</head>

	<body>
	
	
		<div class="wrapper">
			<div class="inner">
				<form method="get">
					<h3>Across Interview Projects</h3>
					<p>Inserire una parola per verificare se è palindroma.</p>
					<p><small>Usare solo caratteri alfanumerici e non inserire più di una parola.</small></p>
					<label class="form-group">
						<input type="text" class="form-control" name="parola" id="parola" required>
						<span>Parola</span>
						<span class="border"></span>
					</label>
					<input type="submit" value="Invia">
				</form>
				<br>
				<div class="tooltip">DISCLAIMER:
					<span class="tooltiptext">La parte grafica di questa pagina <strong>non è</strong> creata da me, credit: <a href="https://colorlib.com/wp/template/colorlib-regform-23/">Colorlib</a></span>
				</div>
			</div> 
		</div>
	</body>
</html>

<?php
include_once('elaborazione.php');

?>