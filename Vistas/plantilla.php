<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Descripcion de la empresa">
	<meta name="keywords" content="metatags,metatag2">
	<meta name="author" content="Autor del sitio web">
	<link rel="shortcut icon" href="Vistas/imagenes/favicon.png">
	<link rel="shortcut icon" href="Vistas/imagenes/favicon.ico">

	<title>Nombre de la empresa | Tagline</title>

	<!--CSS-->
	<link rel="stylesheet" href="Vistas/css/style.css">

</head>
<body>

	<?php  
	include "modulos/cabecera.php";

	if(isset($_GET["url"])){

		if($_GET["url"] == "inicio"){

			include "modulos/".$_GET["url"].".php";

		}

		include "modulos/pie.php";

	}else{

		include "modulos/inicio.php";

	}

	echo '</div>';
	?>

</body>
</html>