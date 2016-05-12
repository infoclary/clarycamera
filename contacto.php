<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<p class="text-con">!Solicita un videodemo ahora¡</p>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<form action="" method="POST">
	<div>
		<input type="text" class="text" name="nombre" placeholder="NOMBRE">
	</div>
	<div>
		<input type="text" class="text" name="email" placeholder="E-MAIL">
	</div>
	<div>
		<input type="text" class="text" name="telefono" placeholder="TELEFONO">
	</div>
	<div>
		<textarea name="mensaje" placeholder="MENSAJE"></textarea >
	</div>
	<div>
		<input type="submit" name="submit" class="boton" value="CONTACTANOS">
	</div>
	</form>
</div>

<?php 


		if(isset($_POST['submit'])){


$destinatario = "miguel@claryla.com, alexander@claryla.com"; 
$asunto = "clarycamera.com.co"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Contacto Clary Camera</title> 
</head> 
<body>
<style type="text/css">
	table{
		width:70px;
	}
	table td{
		border:1px solid;
		padding:10px;

	}
</style> 
<h1>Contacto Clary Camera</h1>
<table>
<tr>
	<td><p>Nombre:</p></td>
	<td><p>'.$_POST["nombre"].'</p></td>
</tr>
<tr>
	<td><p>Email:</p></td>
	<td><p>'.$_POST["email"].'</p></td>
</tr>
<tr>
	<td> <p>telefono:</p></td>
	<td><p>'.$_POST["telefono"].'</p></td>
</tr>
<tr>
	<td> <p>mensaje:</p></td>
	<td><p>'.$_POST["mensaje"].'</p></td>
</tr>
 
</table>
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
 $headers .= 'From: Clarycamera <larycamera@claryla.com>'."\r\n";

mail($destinatario,$asunto,$cuerpo,$headers);
} 



?>
