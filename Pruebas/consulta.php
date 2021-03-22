<html>
<head>
	<title>Aplicación CRUD Simple - Lectura</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 

 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php

require_once ('connect.php');

$ReadSql = "SELECT * FROM estudiantes order by Codigo asc";


?>
<div class="container">
	<div class="row">
	<h2>Operación de Lectura en CRUD</h2>
		<table class="table "> 
		<thead> 
			<tr> 
				<th>Código</th> 
				<th>Nombre Completo</th> 
				<th>E-Mail</th> 				
			</tr> 
		</thead> 
		<tbody> 
		<?php
		    if($res = mysqli_query($connection, $ReadSql))
		    {
		    	echo "Conectado";
		    while($r = mysqli_fetch_assoc($res)){
		?>
			<tr> 
				<th scope="row"><?php echo $r['Codigo']; ?></th> 
				<td><?php echo $r['NombreCompleto']; ?></td> 
				<td><?php echo $r['Email']; ?></td> 				
				<td>
					<a href="update.php?codigo=<?php echo $r['Codigo']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
					<a href="delete.php?codigo=<?php echo $r['Codigo']; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
				</td>
			</tr>
		<?php 
		   } 
		 }
		 else
		 	echo "No conectado";
		?>
		</tbody> 
		</table>
	</div>
</div>
</body>
</html>