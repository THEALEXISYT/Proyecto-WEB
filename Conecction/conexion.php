<?php
function select($consulta,$conexion,$basedatos){
	@mysqli_select_db($conexion,$basedatos);
	return @mysqli_query($conexion,$consulta);
};

if(!strncmp($_SERVER['HTTP_HOST'],'localhost',9) || !strncmp($_SERVER['HTTP_HOST'],'192.168.1.',10)){
	$hostname_conexion = "localhost";
	$database_conexion = "fcp";
	$username_conexion = "root";
	$password_conexion = "";
}else{
	$hostname_conexion = "db5000478967.hosting-data.io";
	$database_conexion = "dbs458962";
	$username_conexion = "dbu454773";
	$password_conexion = "@FCT-Alexis39";
}
$conexion = @mysqli_connect($hostname_conexion, $username_conexion, $password_conexion) or die('Error en la conexión con la base de datos. Disculpen las molestias.<br/><strong>'.mysqli_error().'</strong>'); 
