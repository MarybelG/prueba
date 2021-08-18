<?php
	$alert = '';
	if(!empty($_GET))
	{
		if(empty($_GET['usuario'])||empty($_GET['contrasena']))
		{
			$alert= 'Ingrese usuario y contraseña por favor';
		}
			else
		{
			require "conexion.php";
			
			$user = $_POST['usuario'];
			$pass = $_POST['contrasena'];
			$query="SELECT * FROM contrasena where usuario".$user." and contrasena=".$pass;
			
			$consulta =  mysqli_query($conection,$query);
								 		
		}
	}
?>


<HTML>
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<BODY>

  <p><H1>"BIENVENIDO"</H1></P>
  <form method="get">
  <p>Usuario: <input type="text" name="Usuario" size="40"></p>
  <p>Contraseña: <input type="text" name="Contraseña" size="40"></p>
  <p> <input type="submit" value="Enviar"></p>
  
</BODY>



</HTML>