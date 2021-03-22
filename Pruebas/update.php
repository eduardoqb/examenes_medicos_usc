<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application - UPDATE Operation</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require_once ('connect.php');

$codigo = $_GET['codigo'];

$_SESSION['codigo'] = $codigo;

//echo "Codigo de estudiante: ".$cod

$SelSql = "SELECT * FROM estudiantes WHERE Codigo=$codigo";
$res = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($res);

?>
<div class="container">
	<div class="row">
	<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="updateAction.php">
		<h2>Operación de Actualización en Aplicación CRUD</h2>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Nombre Completo</label>
			    <div class="col-sm-10">
			      <input type="text" name="NombreCompleto"  class="form-control" id="input1" placeholder="Nombre Completo" value="<?php echo $r['NombreCompleto']; ?>" />
			    </div>
			</div> 
			 
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">E-Mail</label>
			    <div class="col-sm-10">
			      <input type="email" name="Email"  class="form-control" id="input1" value="<?php echo $r['Email']; ?>" placeholder="Email" />
			    </div>
			</div>			
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
		</form>		
	</div>
</div>
</body>
</html>