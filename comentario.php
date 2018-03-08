<!DOCTYPE html>
<html>
	<head>
		<title>Comentarios</title>
		<link href="css/main.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<h1>Deje su comentario</h1>
		<p>Por favor ingrese sus datos en el siguiente formulario.</p>
		<br/> <br/>
		<h2>Comentario</h2>
	<form action="guarda_cometario.php" method="post">
		<p>Nombre</p><input type="text" name="nombre"/><br/>
		<p>Correo</p><input type="text" name="correo"/><br/>
		<p>Comentario</p><textarea rows="4" cols="50" name="coment"></textarea><br/>
		<button type="submit">Enviar</button>
	</form>


<a href="index.php">Regresar a la pàgina principal</a>
<?php include "footer.php"?>


</body>
</html>
	
