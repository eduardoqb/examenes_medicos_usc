<?php

session_start();

$connection = mysqli_connect('localhost', 'pow', 'pow$2018USC');

if (!$connection){
    die("No se puedo conectar con base de datos:" . mysqli_error($connection));
}
else
{
	echo "<br>Conectado al servidor";
}
$select_db = mysqli_select_db($connection, 'test');

if (!$select_db){
    die("No se pudo seleccionar la base de datos:" . mysqli_error($connection));
}
else
{
	echo "<br>Conectado a la bd";
}

?>