<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
	<link rel="shortcut icon" type="image/x-icon" href="titulo.ico">
	</head>
<body>
	<meta charset="utf-8">
   <form action="envia.php" method="post">
   <h2 id="h2">Contacto</h2>
   <input type="text" name="nombre" placeholder="Nombre" required>
   <input type="email" name="correo" placeholder="Correo" required>
   <input type="text" name="telefono" placeholder="Telefono" required>
   <textarea name="mensaje" placeholder="Escribe Tu Mensaje" required></textarea>
   <input type="submit" value="Enviar Mensaje" id="boton">

	</body>
<style>
form {
	width: 450px;
	margin: auto;
	background: #000;
	padding: 10px 20px;
	box-sizing: border-box;
	margin-top: 20px;
	border-radius: 7px;
}

#h2 {
	color: #fff;
	text-align: center;
	margin: 0;
	font-size: 30px;
	margin-bottom: 20px;
}

body {
	font-family: monospace;
}

input, textarea {
  width: 100%;
  margin-bottom: 20px;
  padding: 7px;
 box-sizing: border-box;
 font-size: 17px;
 border: 2px solid white;
 background: black;
 color: white;
 border-radius: 5px;

}

textarea {
min-height: 100px;
max-height: 200px;
max-width: 100%;
}

#boton{
	background: #31384A;
	color: #fff;
	padding: 20px;
	cursor: pointer;
	outline: none;
	border: none;
}

@media (max-width: 480px;){
	form{
		width: 100%;
	}
}
</style>
</html>