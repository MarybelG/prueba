<?php

$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "prueba";
$usertable = "usuario";

musql_conect ($hostname,$username, $password)
mysql_select_db($prueba);


$idusuario= $get ['idusuario']
$contrasena = $get ['contrasena']
echo $ idusuario."<br>";
echo $ contrasena."<br>";
echo $ 

//validar datos para DB
session_start = ();

$usuario = $_GET ^['usuario'];
$contrasena = $_GET ['contrasena'];

$conn = musql_conect("localhost","usuario","contrasena", "prueba")

$cosnsulta = mysql_query ($conn, "select * from sesion where user = 'usuario'and contrasena = '$contrasena'");

if (!$consulta){
	echo mysql_error($mysqli);
if ($usuario = mysql_fetch_assoc($consulta)){
}
else {
	
}
}


//consumir la api
$data = json_decode (file_get_contents('https://rickandmortyapi.com/'),true);
echo $data ['idusuario'];


/*return[
'db'=>[
'host'=> 'localhost',
'user'=> 'root',
'pass'=> 'root',
'name'=> 'prueba',
PDO::ATTR_ERRMODE=>PDO::ERRMODE?EXCEPTIN
]
]
$config = include 'index.php';
$conexion = new PDO(mysql:host ='. $config['prueba']['idusuario']$config['prueba']['Nombre'],$config['prueba']['apellido'],$config['prueba']['contrasena'],
$config['prueba']['direccion'], $config['prueba']['correo electronico']$config['prueba']['telefono']);

$sql = file_get_contents('prueba.sql');
$conexion ->exec ($sql);*/

>