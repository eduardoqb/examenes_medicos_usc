<?php
	require_once ('connect.php');

	$s_codigo = $_SESSION['codigo'];
	echo "Codigo de sesion:".$s_codigo;

	if(isset($_POST) & !empty($_POST)){

		$nomcompleto = mysqli_real_escape_string($connection, $_POST['NombreCompleto']);	
		$email = mysqli_real_escape_string($connection, $_POST['Email']);
		$UpdateSql = "UPDATE estudiantes SET NombreCompleto='$nomcompleto' Email='$email' WHERE Codigo=$s_codigo";				
		$res = mysqli_query($connection, $UpdateSql);

		if($res){
			echo "Ejecutado";
			header('location: consulta.php');
		}else{
			$fmsg = "No se pudo actualizar.";
		}
		echo "No error";

	} 
	else
		echo "No post";
?>